<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyChannels;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyChannelsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyChannelsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/channels?where=where',
            ],
            'ByProjectKeyChannelsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/channels?sort=sort',
            ],
            'ByProjectKeyChannelsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/channels?limit=limit',
            ],
            'ByProjectKeyChannelsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/channels?offset=offset',
            ],
            'ByProjectKeyChannelsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/channels?withTotal=withTotal',
            ],
            'ByProjectKeyChannelsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                'get',
                '{projectKey}/channels',
            ],
            'ByProjectKeyChannelsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                'post',
                '{projectKey}/channels',
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