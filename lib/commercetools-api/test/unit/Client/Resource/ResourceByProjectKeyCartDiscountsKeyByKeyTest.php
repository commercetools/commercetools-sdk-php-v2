<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCartDiscountsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCartDiscountsKeyByKeyGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/cart-discounts/key={key}',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/cart-discounts/key={key}',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}?version=version',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}',
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