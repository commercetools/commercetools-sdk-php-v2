<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyCartDiscountsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCartDiscountsKeyByKeyGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/cart-discounts/key={key}',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/cart-discounts/key={key}',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}?version=version',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}',
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

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->delete()
                    ;
                },
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
