<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersEmail;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersEmailToken;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersEmailTokenByEmailToken;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersKeyByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersPassword;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersPasswordToken;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersPasswordTokenByPasswordToken;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomers
 */
class ResourceByProjectKeyCustomersTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyCustomersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/customers?expand=expand',
            ],
            'ByProjectKeyCustomersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/customers?sort=sort',
            ],
            'ByProjectKeyCustomersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/customers?limit=limit',
            ],
            'ByProjectKeyCustomersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/customers?offset=offset',
            ],
            'ByProjectKeyCustomersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/customers?withTotal=withTotal',
            ],
            'ByProjectKeyCustomersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/customers?where=where',
            ],
            'ByProjectKeyCustomersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/customers?var.varName=var.varName',
            ],
            'ByProjectKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->get();
                },
                'get',
                'test_projectKey/customers',
            ],
            'ByProjectKeyCustomersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customers()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/customers?expand=expand',
            ],
            'ByProjectKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->post(null);
                },
                'post',
                'test_projectKey/customers',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCustomersPasswordTokenByPasswordToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersPasswordTokenByPasswordToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->withPasswordToken("test_passwordToken");
                },
                ResourceByProjectKeyCustomersPasswordTokenByPasswordToken::class,
                ['projectKey' => 'test_projectKey', 'passwordToken' => 'test_passwordToken'],
                '/{projectKey}/customers/password-token={passwordToken}'
            ],
            'ResourceByProjectKeyCustomersEmailTokenByEmailToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersEmailTokenByEmailToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->withEmailToken("test_emailToken");
                },
                ResourceByProjectKeyCustomersEmailTokenByEmailToken::class,
                ['projectKey' => 'test_projectKey', 'emailToken' => 'test_emailToken'],
                '/{projectKey}/customers/email-token={emailToken}'
            ],
            'ResourceByProjectKeyCustomersEmailToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersEmailToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->emailToken();
                },
                ResourceByProjectKeyCustomersEmailToken::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers/email-token'
            ],
            'ResourceByProjectKeyCustomersEmail' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersEmail {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->email();
                },
                ResourceByProjectKeyCustomersEmail::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers/email'
            ],
            'ResourceByProjectKeyCustomersPassword' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersPassword {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->password();
                },
                ResourceByProjectKeyCustomersPassword::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers/password'
            ],
            'ResourceByProjectKeyCustomersPasswordToken' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersPasswordToken {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->passwordToken();
                },
                ResourceByProjectKeyCustomersPasswordToken::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers/password-token'
            ],
            'ResourceByProjectKeyCustomersKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyCustomersKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/customers/key={key}'
            ],
            'ResourceByProjectKeyCustomersByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomersByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyCustomersByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/customers/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                }
            ],
            'ByProjectKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomersGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomersGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomersGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomersGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomersGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomersGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomersGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomersGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                599
            ],
            'ByProjectKeyCustomersPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyCustomersPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCustomersPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCustomersPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCustomersPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCustomersPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCustomersPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCustomersPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCustomersPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
