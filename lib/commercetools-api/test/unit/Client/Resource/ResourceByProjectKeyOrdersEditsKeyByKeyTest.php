<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEditsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyOrdersEditsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersEditsKeyByKeyGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/orders/edits/key={key}?expand=expand',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/orders/edits/key={key}',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/orders/edits/key={key}?expand=expand',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/orders/edits/key={key}',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/orders/edits/key={key}?version=version',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/orders/edits/key={key}?expand=expand',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/orders/edits/key={key}',
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