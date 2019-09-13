<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyApiClients;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyApiClientsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyApiClientsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/api-clients?expand=expand',
            ],
            'ByProjectKeyApiClientsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '/{projectKey}/api-clients?where=where',
            ],
            'ByProjectKeyApiClientsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/api-clients?sort=sort',
            ],
            'ByProjectKeyApiClientsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/api-clients?limit=limit',
            ],
            'ByProjectKeyApiClientsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/api-clients?offset=offset',
            ],
            'ByProjectKeyApiClientsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/api-clients?withTotal=withTotal',
            ],
            'ByProjectKeyApiClientsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                'get',
                '/{projectKey}/api-clients',
            ],
            'ByProjectKeyApiClientsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/api-clients?expand=expand',
            ],
            'ByProjectKeyApiClientsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                'post',
                '/{projectKey}/api-clients',
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