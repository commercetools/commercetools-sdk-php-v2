<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategoriesKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyTaxCategoriesKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyTaxCategoriesKeyByKeyGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/tax-categories/key={key}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '/{projectKey}/tax-categories/key={key}',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/tax-categories/key={key}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '/{projectKey}/tax-categories/key={key}',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '/{projectKey}/tax-categories/key={key}?version=version',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '/{projectKey}/tax-categories/key={key}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '/{projectKey}/tax-categories/key={key}',
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