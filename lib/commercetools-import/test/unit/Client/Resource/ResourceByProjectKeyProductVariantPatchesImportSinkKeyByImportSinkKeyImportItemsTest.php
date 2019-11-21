<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Import\Client\ImportRoot;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItems;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItemsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItemsGet_withLimit' => [
                function(ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-variant-patches/importSinkKey={importSinkKey}/import-items?limit=limit',
            ],
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItemsGet_withOffset' => [
                function(ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-variant-patches/importSinkKey={importSinkKey}/import-items?offset=offset',
            ],
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportItemsGet' => [
                function(ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->get();
                },
                'get',
                '{projectKey}/product-variant-patches/importSinkKey={importSinkKey}/import-items',
            ]
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}