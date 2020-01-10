<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Import\Client\ImportRoot;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyGet
 *
 * @internal
 */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyGet' => [
                function (ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importItems()
                        ->resourceKeyWithResourceKeyValue('resourceKey')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/products/importSinkKey={importSinkKey}/import-items/resourceKey={resourceKey}',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyGet' => [
                function (ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importItems()
                        ->resourceKeyWithResourceKeyValue('resourceKey')
                        ->get()
                    ;
                },
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ImportRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
