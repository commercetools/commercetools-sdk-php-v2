<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/in-store/key={storeKey}/customers/{ID}',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
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
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
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
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
