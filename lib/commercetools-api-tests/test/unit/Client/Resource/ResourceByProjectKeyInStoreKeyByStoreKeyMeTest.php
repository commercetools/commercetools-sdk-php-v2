<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMe
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeTest extends TestCase
{
    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }







    public function getRequests()
    {
        return [
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->carts();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/me/carts'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->orders();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/me/orders'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->activeCart();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeActiveCart::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/me/active-cart'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/me/shopping-lists'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
        ];
    }
}
