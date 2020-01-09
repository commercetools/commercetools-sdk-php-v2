<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Import\Client\ImportRoot;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsGet
 *
 * @internal
 */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsGet_withLimit' => [
                function (ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importItems()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/products/importSinkKey={importSinkKey}/import-items?limit=limit',
            ],
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsGet_withOffset' => [
                function (ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importItems()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/products/importSinkKey={importSinkKey}/import-items?offset=offset',
            ],
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyImportItemsGet' => [
                function (ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importItems()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/products/importSinkKey={importSinkKey}/import-items',
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
}
