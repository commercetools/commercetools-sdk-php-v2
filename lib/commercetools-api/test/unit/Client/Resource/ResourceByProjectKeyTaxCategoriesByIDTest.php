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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyTaxCategoriesByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyTaxCategoriesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/tax-categories/{ID}',
            ],
            'ByProjectKeyTaxCategoriesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/tax-categories/{ID}',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/tax-categories/{ID}?version=version',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/tax-categories/{ID}',
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
            'ByProjectKeyTaxCategoriesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyTaxCategoriesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyTaxCategoriesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
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
