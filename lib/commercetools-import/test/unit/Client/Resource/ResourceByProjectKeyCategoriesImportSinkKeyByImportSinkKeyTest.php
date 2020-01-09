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
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/categories/importSinkKey={importSinkKey}',
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
