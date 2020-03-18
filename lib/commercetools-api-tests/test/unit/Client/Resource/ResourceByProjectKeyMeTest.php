<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeActiveCart;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCarts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeEmail;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeLogin;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeOrders;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePassword;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePayment;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePayments;
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
use Prophecy\Argument;
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
            'ByProjectKeyMeGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/me?sort=sort',
            ],
            'ByProjectKeyMeGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/me?limit=limit',
            ],
            'ByProjectKeyMeGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/me?offset=offset',
            ],
            'ByProjectKeyMeGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/me?withTotal=withTotal',
            ],
            'ByProjectKeyMeGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/me?expand=expand',
            ],
            'ByProjectKeyMeGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/me?where=where',
            ],
            'ByProjectKeyMeGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/me?var.varName=var.varName',
            ],
            'ByProjectKeyMeGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                'get',
                '{projectKey}/me',
            ],
            'ByProjectKeyMePost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                'post',
                '{projectKey}/me',
            ],
            'ByProjectKeyMeDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/me?version=version',
            ],
            'ByProjectKeyMeDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                'delete',
                '{projectKey}/me',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMeEmail' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeEmail {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->email();
                },
                ResourceByProjectKeyMeEmail::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/email'
            ],
            'ResourceByProjectKeyMePassword' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePassword {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->password();
                },
                ResourceByProjectKeyMePassword::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/password'
            ],
            'ResourceByProjectKeyMeSignup' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeSignup {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->signup();
                },
                ResourceByProjectKeyMeSignup::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/signup'
            ],
            'ResourceByProjectKeyMeLogin' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeLogin {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->login();
                },
                ResourceByProjectKeyMeLogin::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/login'
            ],
            'ResourceByProjectKeyMeActiveCart' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeActiveCart {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->activeCart();
                },
                ResourceByProjectKeyMeActiveCart::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/active-cart'
            ],
            'ResourceByProjectKeyMeCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeCarts {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts();
                },
                ResourceByProjectKeyMeCarts::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/carts'
            ],
            'ResourceByProjectKeyMeOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeOrders {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->orders();
                },
                ResourceByProjectKeyMeOrders::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/orders'
            ],
            'ResourceByProjectKeyMePayments' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePayments {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments();
                },
                ResourceByProjectKeyMePayments::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/payments'
            ],
            'ResourceByProjectKeyMeShoppingLists' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeShoppingLists {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists();
                },
                ResourceByProjectKeyMeShoppingLists::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/shopping-lists'
            ],
            'ResourceByProjectKeyMePayment' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePayment {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payment();
                },
                ResourceByProjectKeyMePayment::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me/payment'
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
            'ByProjectKeyMeGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                503
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
            'ByProjectKeyMePost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                503
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
            'ByProjectKeyMeDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                503
            ]
        ];
    }
}
