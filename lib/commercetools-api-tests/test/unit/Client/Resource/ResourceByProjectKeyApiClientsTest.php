<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyApiClientsByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyApiClientsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyApiClientsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyApiClients
 */
class ResourceByProjectKeyApiClientsTest extends TestCase
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
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ApiRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
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
            'ByProjectKeyApiClientsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/api-clients?expand=expand',
            ],
            'ByProjectKeyApiClientsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/api-clients?sort=sort',
            ],
            'ByProjectKeyApiClientsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/api-clients?limit=limit',
            ],
            'ByProjectKeyApiClientsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/api-clients?offset=offset',
            ],
            'ByProjectKeyApiClientsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/api-clients?withTotal=withTotal',
            ],
            'ByProjectKeyApiClientsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/api-clients?where=where',
            ],
            'ByProjectKeyApiClientsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/api-clients?var.varName=var.varName',
            ],
            'ByProjectKeyApiClientsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                'get',
                '{projectKey}/api-clients',
            ],
            'ByProjectKeyApiClientsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/api-clients?expand=expand',
            ],
            'ByProjectKeyApiClientsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                'post',
                '{projectKey}/api-clients',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyApiClientsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyApiClientsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->withId("ID");
                },
                ResourceByProjectKeyApiClientsByID::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyApiClientsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                }
            ],
            'ByProjectKeyApiClientsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyApiClientsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                200
            ],
            'ByProjectKeyApiClientsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                400
            ],
            'ByProjectKeyApiClientsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                401
            ],
            'ByProjectKeyApiClientsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                403
            ],
            'ByProjectKeyApiClientsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                404
            ],
            'ByProjectKeyApiClientsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                500
            ],
            'ByProjectKeyApiClientsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                503
            ],
            'ByProjectKeyApiClientsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyApiClientsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyApiClientsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyApiClientsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyApiClientsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyApiClientsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyApiClientsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyApiClientsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
