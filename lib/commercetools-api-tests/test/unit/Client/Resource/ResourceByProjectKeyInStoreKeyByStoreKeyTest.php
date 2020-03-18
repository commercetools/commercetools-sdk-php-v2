<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCarts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomers;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyLogin;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMe;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrders;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKey
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
    }

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

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCarts {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCarts::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}/carts'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyOrders {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyOrders::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}/orders'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyMe' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMe {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMe::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}/me'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomers' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomers {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomers::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyLogin' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyLogin {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->login();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyLogin::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}/login'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->shippingMethods();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}/shipping-methods'
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
