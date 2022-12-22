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
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyImageSearch;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingData;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendations;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeySimilarities;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKey
 */
class ResourceByProjectKeyTest extends TestCase
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
            'ResourceByProjectKeyImageSearch' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyImageSearch {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->imageSearch();
                },
                ResourceByProjectKeyImageSearch::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/image-search'
            ],
            'ResourceByProjectKeyRecommendations' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyRecommendations {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recommendations();
                },
                ResourceByProjectKeyRecommendations::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/recommendations'
            ],
            'ResourceByProjectKeySimilarities' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeySimilarities {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->similarities();
                },
                ResourceByProjectKeySimilarities::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/similarities'
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
