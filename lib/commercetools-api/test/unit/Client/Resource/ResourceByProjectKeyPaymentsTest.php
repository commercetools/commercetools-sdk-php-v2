<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPayments;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyPaymentsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyPaymentsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '/{projectKey}/payments?where=where',
            ],
            'ByProjectKeyPaymentsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/payments?sort=sort',
            ],
            'ByProjectKeyPaymentsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/payments?limit=limit',
            ],
            'ByProjectKeyPaymentsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/payments?offset=offset',
            ],
            'ByProjectKeyPaymentsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/payments?withTotal=withTotal',
            ],
            'ByProjectKeyPaymentsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                'get',
                '/{projectKey}/payments',
            ],
            'ByProjectKeyPaymentsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                'post',
                '/{projectKey}/payments',
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