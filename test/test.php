<?php
declare(strict_types = 1);

namespace Commercetools\Api\Models\Product {
    function allVariants(ProductData $data)
    {
        $data = array_merge(
            [$data->getMasterVariant()],
            $data->getVariants()->toArray()
        );
        return new ProductVariantCollection($data);
    }
}

namespace Test {

    use Commercetools\Api\Client\ApiRoot;
    use Commercetools\Api\Client\ClientCredentialsConfig;
    use Commercetools\Api\Client\Config;
    use Commercetools\Api\Models\Cart\CartModel;
    use Commercetools\Api\Models\Category\CategoryPagedQueryResponseModel;
    use Commercetools\Api\Models\Common\LocalizedStringModel;
    use Commercetools\Api\Models\Product\ProductDraftModel;
    use Commercetools\Api\Models\Product\ProductVariantDraftModel;
    use Commercetools\Api\Models\Project\ProjectModel;
    use Commercetools\Base\ResultMapper;
    use Commercetools\Client\ClientFactory;
    use Commercetools\Client\MiddlewareFactory;
    use Commercetools\Api\Models\Category\CategoryDraftBuilder;
    use Commercetools\Api\Models\Product\ProductVariantDraftCollection;
    use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
    use Commercetools\Api\Models\Type\FieldContainerBuilder;
    use Commercetools\Api\Models\Type\FieldContainerModel;
    use GuzzleHttp\HandlerStack;
    use GuzzleHttp\Psr7\Response;
    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;

    require __DIR__ . '/../vendor/autoload.php';


    $authHandler = HandlerStack::create();
    $authHandler->push(MiddlewareFactory::createLoggerMiddleware(new Logger('auth', [new StreamHandler('./logs/requests.log')])));

    $authConfig = new ClientCredentialsConfig(
        [
            'options' => ['handler' => $authHandler],
            'clientId' => '',
            'clientSecret' => ''
        ]
    );
    $logger = new Logger('client', [new StreamHandler('./logs/requests.log')]);

    $client = ClientFactory::of()->createGuzzleClient(
        new Config(),
        $authConfig,
        $logger
    );


    $response = $client->get('');

    var_dump((string)$response->getBody());

//$client = ClientFactory::of()->createGuzzleClient(
//    $config,
//    [
//        'oauth' => MiddlewareFactory::createOAuthMiddlewareForProvider(
//            new RawTokenProvider(new TokenModels(''))
//        ),
//        'logger' => MiddlewareFactory::createLoggerMiddleware(new Logger('client', [new StreamHandler('./logs/requests.log')]))
//    ]
//);


    $root = new ApiRoot($client);

    $response = $root->withProjectKey('phpsphere-90')->get()->send();

    $project = ProjectModel::fromArray(json_decode((string)$response->getBody(), true));

    var_dump($project->getKey());
    var_dump($project->getCreatedAt());
    var_dump($project->getMessages());
    var_dump($project->getShippingRateInputType());
    var_dump($project);
    var_dump(json_encode($project));

//$project = new ProjectModels();
//var_dump($project);
//var_dump($project->getKey());

    $response = $root->withProjectKey('phpsphere-90')->categories()->get()->send();


    $catResponse = CategoryPagedQueryResponseModel::of(json_decode((string)$response->getBody()));
    $categories = $catResponse->getResults();
    $c1 = $categories->current();
    var_dump($categories->current());
    var_dump($categories->current());
    $categories->next();
    var_dump($categories->current());
    var_dump($categories);
    $d = $categories->offsetGet(1);
    $t = $categories->getIterator();
    $t->next();
    $t->next();
    var_dump($t);
    var_dump($t->current());
    $t->next();
    var_dump($t->current());
    var_dump($categories);
    var_dump($c1->getName());
    var_dump($c1->getName()->at('en'));

    $c1->setCreatedAt(new \DateTimeImmutable());

    $root = new ApiRoot($client, ['projectKey' => 'phpsphere-90']);

    $t = $root->withProjectKey()->productProjections()->search()->get()->withFacet("categories.id");

    $r = $client->send($t);
    $c = $t->execute();


    var_dump($c->getResults()->current());
    var_dump($c->getFacets());
    var_dump((string)$r->getBody());


    $tr = new Response(500, [], '{"foo" : {"bar": "baz"}, "foos": [{"bars": "bazs"}], "bar": [1, 2, 3], "baz": "boz" }');
    $foo = $t->mapFromResponse($tr);

    $tr = new Response(200, [], '{"foo" : {"bar": "baz"}, "foos": [{"bars": "bazs"}], "bar": [1, 2, 3], "baz": "boz" }');
    /** @var CartModel $bar */
    $bar = $t->mapFromResponse($tr, CartModel::class);


    var_dump(get_class($foo));
    var_dump(get_class($bar));

    var_dump($foo->get('foo')->get("bar"));
    var_dump($foo->get('foos')->current());
    var_dump($foo->get('bar'));
    var_dump($foo->get('baz'));


    $tr = new Response(200, [], '{"de-DE" : "test" }');
    $l = $t->mapFromResponse($tr, LocalizedStringModel::class);

    $mapper = new ResultMapper();

    $ls = $mapper->mapResponseToClass(LocalizedStringModel::class, $tr);
    var_dump($l->at("de-DE"));

    $t = ProductDraftModel::of();

    $v = ProductVariantDraftModel::of();
    $v->setSku("123");

    $t->setDescription(LocalizedStringModel::of()->put('en', 'test'));
    $t->setVariants((
        new ProductVariantDraftCollection())->add($v)
    );
    var_dump(json_encode($t));

    $d = ProductVariantDraftModel::fromArray(['sku' => 'test']);
    var_dump($d->getSku());
    var_dump($d);

    $fc = FieldContainerBuilder::of();
    $fc->put("foo", "bar");
    $cf = CustomFieldsDraftBuilder::of();
    $cf->withFieldsBuilder($fc);

    $b = CategoryDraftBuilder::of()->withCustomBuilder($cf);

    var_dump($b);
    $c1 = $b->build();

    $fc->put("foo", "baz");
    $c2 = $b->build();

    var_dump(json_encode($c1));
    var_dump(json_encode($c2));
//    allVariants($t);

//    var_dump((new CartModels())->use());
}
