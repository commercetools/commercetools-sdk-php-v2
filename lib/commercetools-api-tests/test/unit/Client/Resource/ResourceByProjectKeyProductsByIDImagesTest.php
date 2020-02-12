<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Client\ApiRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Base\JsonObject;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDImagesPost
 */
class ResourceByProjectKeyProductsByIDImagesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsByIDImagesPost_withFilename' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withFilename('filename');
                },
                'post',
                '{projectKey}/products/{ID}/images?filename=filename',
            ],
            'ByProjectKeyProductsByIDImagesPost_withVariant' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withVariant('variant');
                },
                'post',
                '{projectKey}/products/{ID}/images?variant=variant',
            ],
            'ByProjectKeyProductsByIDImagesPost_withSku' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withSku('sku');
                },
                'post',
                '{projectKey}/products/{ID}/images?sku=sku',
            ],
            'ByProjectKeyProductsByIDImagesPost_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withStaged('staged');
                },
                'post',
                '{projectKey}/products/{ID}/images?staged=staged',
            ],
            'ByProjectKeyProductsByIDImagesPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->images()
                        ->post(null);
                },
                'post',
                '{projectKey}/products/{ID}/images',
            ]
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
        };
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsByIDImagesPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->images()
                        ->post(null);
                }
            ]
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

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
