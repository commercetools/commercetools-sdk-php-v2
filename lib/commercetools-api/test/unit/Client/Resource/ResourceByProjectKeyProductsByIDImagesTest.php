<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDImagesPost
 *
 * @internal
 */
class ResourceByProjectKeyProductsByIDImagesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsByIDImagesPost_withFilename' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withFilename('filename')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}/images?filename=filename',
            ],
            'ByProjectKeyProductsByIDImagesPost_withVariant' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withVariant('variant')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}/images?variant=variant',
            ],
            'ByProjectKeyProductsByIDImagesPost_withSku' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withSku('sku')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}/images?sku=sku',
            ],
            'ByProjectKeyProductsByIDImagesPost_withStaged' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                        ->withStaged('staged')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}/images?staged=staged',
            ],
            'ByProjectKeyProductsByIDImagesPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->images()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/products/{ID}/images',
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
}
