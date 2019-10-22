<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategoriesByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyTaxCategoriesByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyTaxCategoriesByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/tax-categories/{ID}',
            ],
            'ByProjectKeyTaxCategoriesByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/tax-categories/{ID}',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/tax-categories/{ID}?version=version',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/tax-categories/{ID}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/tax-categories/{ID}',
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