<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Import\Client\ApiRoot;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSinksByImportSinkKeyItems;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyImportSinksByImportSinkKeyItemsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyImportSinksByImportSinkKeyItemsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->items()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/import-sinks/{importSinkKey}/items?limit=limit',
            ],
            'ByProjectKeyImportSinksByImportSinkKeyItemsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->items()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/import-sinks/{importSinkKey}/items?offset=offset',
            ],
            'ByProjectKeyImportSinksByImportSinkKeyItemsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->items()
                        ->get();
                },
                'get',
                '/{projectKey}/import-sinks/{importSinkKey}/items',
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