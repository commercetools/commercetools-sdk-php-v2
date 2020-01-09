<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyApiClientsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyApiClientsByIDGet
 *
 * @internal
 */
class ResourceByProjectKeyApiClientsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyApiClientsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/api-clients/{ID}',
            ],
            'ByProjectKeyApiClientsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/api-clients/{ID}',
            ],
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }
}
