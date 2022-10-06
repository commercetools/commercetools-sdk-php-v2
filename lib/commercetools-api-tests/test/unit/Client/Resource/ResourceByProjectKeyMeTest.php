<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeActiveCart;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeBusinessUnits;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCarts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeEmailConfirm;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeLogin;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeOrders;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePassword;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePayments;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuoteRequests;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeShoppingLists;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeSignup;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMe
 */
class ResourceByProjectKeyMeTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertSame($relativeUri, (string) $request->getUri());
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
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ClientException("Oops!", $request, new Response(400)));

        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyMeGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/me?sort=sort',
            ],
            'ByProjectKeyMeGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/me?limit=limit',
            ],
            'ByProjectKeyMeGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/me?offset=offset',
            ],
            'ByProjectKeyMeGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/me?withTotal=withTotal',
            ],
            'ByProjectKeyMeGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me?expand=expand',
            ],
            'ByProjectKeyMeGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/me?where=where',
            ],
            'ByProjectKeyMeGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/me?var.varName=var.varName',
            ],
            'ByProjectKeyMeGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->get();
                },
                'get',
                'test_projectKey/me',
            ],
            'ByProjectKeyMePost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->post(null);
                },
                'post',
                'test_projectKey/me',
            ],
            'ByProjectKeyMeDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me?version=version',
            ],
            'ByProjectKeyMeDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->delete();
                },
                'delete',
                'test_projectKey/me',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMeEmailConfirm' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeEmailConfirm {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->emailConfirm();
                },
                ResourceByProjectKeyMeEmailConfirm::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/email/confirm'
            ],
            'ResourceByProjectKeyMePassword' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePassword {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->password();
                },
                ResourceByProjectKeyMePassword::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/password'
            ],
            'ResourceByProjectKeyMeSignup' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeSignup {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->signup();
                },
                ResourceByProjectKeyMeSignup::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/signup'
            ],
            'ResourceByProjectKeyMeLogin' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeLogin {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->login();
                },
                ResourceByProjectKeyMeLogin::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/login'
            ],
            'ResourceByProjectKeyMeActiveCart' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeActiveCart {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->activeCart();
                },
                ResourceByProjectKeyMeActiveCart::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/active-cart'
            ],
            'ResourceByProjectKeyMeBusinessUnits' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeBusinessUnits {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits();
                },
                ResourceByProjectKeyMeBusinessUnits::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/business-units'
            ],
            'ResourceByProjectKeyMeCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeCarts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts();
                },
                ResourceByProjectKeyMeCarts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/carts'
            ],
            'ResourceByProjectKeyMeOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeOrders {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->orders();
                },
                ResourceByProjectKeyMeOrders::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/orders'
            ],
            'ResourceByProjectKeyMePayments' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePayments {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments();
                },
                ResourceByProjectKeyMePayments::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/payments'
            ],
            'ResourceByProjectKeyMeQuoteRequests' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeQuoteRequests {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests();
                },
                ResourceByProjectKeyMeQuoteRequests::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/quote-requests'
            ],
            'ResourceByProjectKeyMeShoppingLists' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeShoppingLists {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists();
                },
                ResourceByProjectKeyMeShoppingLists::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/shopping-lists'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMeGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                }
            ],
            'ByProjectKeyMePost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                }
            ],
            'ByProjectKeyMeDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMePost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMePost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMePost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMePost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMePost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMePost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMePost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMePost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMePost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMeDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMeDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMeDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                599
            ]
        ];
    }
}
