<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Ml\Client\MlRequestBuilder;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendationsGeneralCategories;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendationsProjectCategories;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendations
 */
class ResourceByProjectKeyRecommendationsTest extends TestCase
{
    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new MlRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }







    public function getRequests()
    {
        return [
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyRecommendationsProjectCategories' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyRecommendationsProjectCategories {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recommendations()
                        ->projectCategories();
                },
                ResourceByProjectKeyRecommendationsProjectCategories::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/recommendations/project-categories'
            ],
            'ResourceByProjectKeyRecommendationsGeneralCategories' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyRecommendationsGeneralCategories {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recommendations()
                        ->generalCategories();
                },
                ResourceByProjectKeyRecommendationsGeneralCategories::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/recommendations/general-categories'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
        ];
    }
}
