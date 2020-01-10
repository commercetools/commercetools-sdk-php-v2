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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyDiscountCodesByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyDiscountCodesByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/discount-codes/{ID}?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/discount-codes/{ID}',
            ],
            'ByProjectKeyDiscountCodesByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/discount-codes/{ID}?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/discount-codes/{ID}',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_withDataErasure' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/discount-codes/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/discount-codes/{ID}?version=version',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/discount-codes/{ID}?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/discount-codes/{ID}',
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
            'ByProjectKeyDiscountCodesByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyDiscountCodesByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyDiscountCodesByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->withId('ID')
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
