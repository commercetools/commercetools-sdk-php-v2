<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Import\Client\ImportRequestBuilder;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSinksByImportSinkKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksPost
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksGet
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSinks
 */
class ResourceByProjectKeyImportSinksTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRequestBuilder();
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
        $builder = new ImportRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ImportRequestBuilder();
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

        $builder = new ImportRequestBuilder($client->reveal());
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

        $builder = new ImportRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyImportSinksPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->post(null);
                },
                'post',
                '{projectKey}/import-sinks',
            ],
            'ByProjectKeyImportSinksGet_withLimit' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->importSinks()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/import-sinks?limit=limit',
            ],
            'ByProjectKeyImportSinksGet_withOffset' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->importSinks()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/import-sinks?offset=offset',
            ],
            'ByProjectKeyImportSinksGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->get();
                },
                'get',
                '{projectKey}/import-sinks',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImportSinksByImportSinkKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportSinksByImportSinkKey {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey");
                },
                ResourceByProjectKeyImportSinksByImportSinkKey::class,
                ['projectKey' => 'projectKey', 'importSinkKey' => 'importSinkKey'],
                '/{projectKey}/import-sinks/{importSinkKey}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyImportSinksPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->post(null);
                }
            ],
            'ByProjectKeyImportSinksGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyImportSinksPost_201' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyImportSinksPost_400' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyImportSinksGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->get();
                },
                200
            ]
        ];
    }
}
