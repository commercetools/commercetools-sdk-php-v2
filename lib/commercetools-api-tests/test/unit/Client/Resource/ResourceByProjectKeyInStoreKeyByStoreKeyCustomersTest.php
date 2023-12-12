<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomers
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/customers?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/customers',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/customers?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/customers',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withPasswordToken("test_passwordToken");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'passwordToken' => 'test_passwordToken'],
                '/{projectKey}/in-store/key={storeKey}/customers/password-token={passwordToken}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withEmailToken("test_emailToken");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'emailToken' => 'test_emailToken'],
                '/{projectKey}/in-store/key={storeKey}/customers/email-token={emailToken}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->emailToken();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers/email-token'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->emailConfirm();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers/email/confirm'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->password();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers/password'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->passwordReset();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers/password/reset'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->passwordToken();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers/password-token'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'key' => 'test_key'],
                '/{projectKey}/in-store/key={storeKey}/customers/key={key}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'ID' => 'test_ID'],
                '/{projectKey}/in-store/key={storeKey}/customers/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->head();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
