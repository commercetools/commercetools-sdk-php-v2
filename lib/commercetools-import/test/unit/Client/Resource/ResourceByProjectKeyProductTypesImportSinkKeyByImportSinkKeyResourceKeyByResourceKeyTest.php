<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Import\Client\ApiRoot;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productTypes()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->resourceKeyWithResourceKeyValue("resourceKey")
                        ->delete();
                },
                'delete',
                '{projectKey}/product-types/importSinkKey={importSinkKey}/resourceKey={resourceKey}',
            ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}