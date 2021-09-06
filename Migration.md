# Guide to migrate from the PHP SDK 1.x to the PHP SDK 2.x

This guide helps developers to migrate from the version 1.x to the version 2.x of PHP SDK.

## Table of content

* [Client Configuration and Creation](#client-configuration-and-creation)
* [Timeout Setting](#timout-setting)
* [Headers](#headers)
* [Retry](#retry)
* [Draft Builder](#draft-builder)
* [Create Command](#create-command)
* [Create From Json](#create-from-json)
* [Update Command](#update-command)
* [Query - GetById](#query-getbyid)
* [Query](#query)

<a id="client-configuration-and-creation"></a>
### Client Configuration and Creation
To setup the Client, in the 1.x we use the <strong>Config</strong> class to add the config data and then the <strong>Client</strong> class to create the Client from the Config.
In the 2.x the <strong>ClientCredentialsConfig</strong> class sets up the config data and the <strong>ClientFactory</strong> creates the client.
The benefit of the 2.x, is that through the <strong>ClientFactory</strong> class, there is the possibility to easily setup the available Middlewares such as: the Logger, the Retry, the Header as it will be mention in the [Retry](#retry) section.

1.x
```php
        $config = Config::fromArray([
            'client_id' => 'my_client_id',
            'client_secret' => 'my_client_secret',
            'project' => 'my_project_id'
        ]);

        $config->setOauthUrl(self::OAUTH_URL)->setApiUrl(self::API_URL);
        $client = Client::ofConfig($config);
        $request = RequestBuilder::of()->project()->get();
        $response = $client->execute($request);
```
2.x

*For the rest of the Guideline this part below will be replaced with* <strong>$builder = $this->builder();</strong> 
```php
        $clientId = 'my_client_id';
        $clientSecret = 'my_client_secret';
        $projectKey = 'my_project_key';

        $authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));
        $client = ClientFactory::of()->createGuzzleClient(new Config(['maxRetries' => 3]), $authConfig);

        $apiRequest = new ApiRequestBuilder($projectKey, $client);
```

<a id="timout-setting"></a>
### Timeout Setting
In both versions is the <strong>execute()</strong> method that sets the timeout.

1.x
```php
        $options = ['timeout' => '45'];
        $request = RequestBuilder::of()->categories()->query();
        $response = $this->execute($this->client(), $request, $options);
```
2.x
```php
        $options = ['timeout' => '45'];
        $builder = $this->builder();
        $request = $builder->with()->categories()->get();
        $respose = $request->execute($options);
```

<a id="headers"></a>
### Headers
To set *Headers*, in the 1.x it is possible in the <strong>execute()</strong> method itself and in the 2.x, it can be directly set during the building request with the *withHeader* method.


1.x
```php
        $client = $this->client();
        /** @var CategoryDraft $categoryDraft */
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $headers = ["foo" => "bar"];
        $response = $this->execute($client, $request, $headers);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $request = $builder->with()->categories()->get()->withHeader("foo", "bar");
        $result = $request->execute();
```
<a id="retry"></a>
### Retry
In the 1.x, the *Retry* is handled through the client options, so with multidimensional array. And then, the creation of the Client, which here below there is another way to build it.

The 2.x is better structured because through the <strong>MiddlewareFactory</strong> is possible to set a middleware array through the <strong>createRetryNAMiddleware</strong> method, that helps in this case, to setup the *Retry*.



1.x
```php
        $config = Config::fromArray([
            'client_id' => self::CLIENT_ID,
            'client_secret' => self::CLIENT_SECRET,
            'project' => self::PROJECT_KEY
        ]);
        $maxRetries = 3;
        $clientOptions = [
            'middlewares' => [
                'retry' => Middleware::retry(
                    function ($retries, RequestInterface $request, ResponseInterface $response = null, RequestException $error = null) use ($maxRetries) {
                        return $retries < $maxRetries && ($error instanceof ConnectException || $response && $response->getStatusCode() >= 500);
                    }
                )
            ]
        ];
        $config->setClientOptions($clientOptions);
        $client = ClientFactory::of()->createClient($config, new Logger('test'));
```
2.x
```php
        $config = new Config(
            [
                'client_id' => self::CLIENT_ID,
                'client_secret' => self::CLIENT_SECRET,
                'project' => self::PROJECT_KEY
            ]
        );
        $middlewares = [];
        $middlewares['retryNA'] = MiddlewareFactory::createRetryNAMiddleware($maxRetries = 3);
        $client = \Commercetools\Client\ClientFactory::of()->createGuzzleClientForMiddlewares(
            $config,
            $middlewares
        );
```
<a id="draft-builder"></a>
### Draft Builder
About the *DraftBuilder* the main difference is that in the 2.x we introduced the <strong>build</strong> method to create objects, in this case the *DraftBuilder* object.
As can be seen below, the setters are being replaced by the *with* methods. 

1.x
```php
        $categoryDraft = CategoryDraft::ofNameAndSlug(LocalizedString::ofLangAndText('en', 'name'), LocalizedString::ofLangAndText('en', 'slug'))
                                ->setMetaDescription(LocalizedString::ofLangAndText('en', 'metaDescription'))
                                ->setMetaTitle(LocalizedString::ofLangAndText('en', 'metaTitle'))
                                ->setMetaKeywords(LocalizedString::ofLangAndText('en', 'metaKeywords'))
                                ->setExternalId("externalId");
```
2.x
```php
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', 'name')->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', 'slug')->build())
                                ->withMetaDescription(LocalizedStringBuilder::of()->put('en', 'metaDescription')->build())
                                ->withMetaTitle(LocalizedStringBuilder::of()->put('en', 'metaTitle')->build())
                                ->withMetaKeywords(LocalizedStringBuilder::of()->put('en', 'metaKeywords')->build())
                                ->withExternalId("externalId")
                                ->build();
```
<a id="create-command"></a>
### Create Command
In the 2.x, we replaced the <strong>RequestBuilder</strong> class with <strong>ApiRequestBuilder</strong> to build the request (see [Client Configuration and Creation](#client-configuration-and-creation) section). 
There are not dedicated methods to build a request, like in this case the *create* method, but to have a request it needs to have a draft to build and which is passed into the *post()* method.

Here below the differences between the two versions:


1.x
```php
        $client = $this->client();
        $categoryDraft = CategoryDraft::of()
                                ->setName(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setSlug(LocalizedString::ofLangAndText('en', $this->uniqueString()))
                                ->setKey($this->uniqueString());
        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        $categoryDraft = CategoryDraftBuilder::of()
                                ->withName(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withSlug(LocalizedStringBuilder::of()->put('en', $this->uniqueString())->build())
                                ->withKey($this->uniqueString())
                                ->build();
        $request = $builder->with()->categories()->post($categoryDraft);
        $result = $request->execute();
```
<a id="create-from-json"></a>
### Create From Json
The main difference is how to build the request, as explained in the [Create Command](#create-command).


1.x
```php
        $client = $this->client();
        $categoryDraft = CategoryDraft::fromArray(json_decode(file_get_contents(__DIR__ . "/categoryDraft.json")));

        $request = RequestBuilder::of()->categories()->create($categoryDraft);
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        /** @var CategoryDraft $categoryDraft */
        $categoryDraft = json_decode(file_get_contents(__DIR__ . "/categoryDraft.json"));

        $request = $builder->with()->categories()->post($categoryDraft);
        $result = $request->execute();
```
<a id="update-command"></a>
### Update Command
Like the [Create Command](#create-command), there are not dedicated classes for the *Update Command* like in the 1.x the <strong>update</strong> method, but it's substantial, the use of the <strong>UpdateBuilder</strong> to create the type of update action to apply in the <strong>post</strong> method.

Here the differences:

1.x
```php
        $client = $this->client();

        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->update($category)
                    ->addAction(
                        CategoryChangeNameAction::ofName(
                            LocalizedString::ofLangAndText('en', 'name')
                        )
                    );
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();

        $newName = LocalizedStringBuilder::of()->put('en', "new-name")->build();
        $updateAction = new CategoryChangeNameActionModel();
        $updateAction->setName($newName);
        $updateActionCollection = new CategoryUpdateActionCollection();
        $updateActionCollection->add($updateAction);
        /** @var Category $category */
        $request = $builder->with()->categories()->withId($category->getId())
            ->post(
                CategoryUpdateBuilder::of()->withVersion($category->getVersion())
                    ->withActions($updateActionCollection)->build()
            );
        $result = $request->execute();
```

<a id="query-getbyid"></a>
### Query - GetById
In case of *Query by Id* action, the 2.x is not so different from the previous cases, except that, it uses the <strong>get</strong> method in the request before the other ways to filter the query request.

1.x
```php
        $client = $this->client();
        /** @var Category $category */
        $request = RequestBuilder::of()->categories()->getById($category->getId())->expand('parent');
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);
```
2.x
```php
        $builder = $this->builder();
        /** @var CategoryBuilder $category */
        $request = $builder->with()->categories()->withId($category->getId())->get()->withExpand('parent');
        $result = $request->execute();
```
<a id="query"></a>
### Query
Here another example to query the request using lambda expressions. You may immediately notice that the structure does not change comparing to the other requests.


1.x
```php
        $client = $this->client();

        $request = RequestBuilder::of()->categories()->query()->where('id = :id');
        $response = $this->execute($client, $request);
        $result = $request->mapFromResponse($response);

```
2.x
```php
        $builder = $this->builder();
        $request = $builder->with()->categories()->get()->withWhere('id = :id')->withPredicateVar("id", "id123");
        $result = $request->execute();
```

