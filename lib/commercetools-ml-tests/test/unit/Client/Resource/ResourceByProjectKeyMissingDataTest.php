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
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataAttributes;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataImages;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataPrices;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingData
 */
class ResourceByProjectKeyMissingDataTest extends TestCase
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
            'ResourceByProjectKeyMissingDataAttributes' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataAttributes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->attributes();
                },
                ResourceByProjectKeyMissingDataAttributes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/attributes'
            ],
            'ResourceByProjectKeyMissingDataImages' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataImages {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->images();
                },
                ResourceByProjectKeyMissingDataImages::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/images'
            ],
            'ResourceByProjectKeyMissingDataPrices' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataPrices {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->prices();
                },
                ResourceByProjectKeyMissingDataPrices::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/prices'
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
