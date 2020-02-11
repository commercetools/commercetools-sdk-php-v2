<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Import\Client\ImportRequestBuilder;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksPost
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksGet
 */
class ResourceByProjectKeyImportSinksTest extends TestCase
{
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
        };
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

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ImportRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
