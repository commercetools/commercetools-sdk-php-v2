<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMessages;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyMessagesTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyMessagesGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/messages?expand=expand',
           ],
           'ByProjectKeyMessagesGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/messages?where=where',
           ],
           'ByProjectKeyMessagesGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/messages?sort=sort',
           ],
           'ByProjectKeyMessagesGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/messages?limit=limit',
           ],
           'ByProjectKeyMessagesGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/messages?offset=offset',
           ],
           'ByProjectKeyMessagesGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/messages?withTotal=withTotal',
           ],
           'ByProjectKeyMessagesGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->messages()
                       ->get();
               },
               'get',
               '/{projectKey}/messages',
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