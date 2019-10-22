<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Import\Client\ApiRoot;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSinksByImportSinkKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyImportSinksByImportSinkKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyImportSinksByImportSinkKeyPut' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->put(null);
                },
                'put',
                '{projectKey}/import-sinks/{importSinkKey}',
            ],
            'ByProjectKeyImportSinksByImportSinkKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->get();
                },
                'get',
                '{projectKey}/import-sinks/{importSinkKey}',
            ],
            'ByProjectKeyImportSinksByImportSinkKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->delete();
                },
                'delete',
                '{projectKey}/import-sinks/{importSinkKey}',
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