<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyShippingMethodsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods/{ID}',
            ],
            'ByProjectKeyShippingMethodsByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/shipping-methods/{ID}',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}?version=version',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}',
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