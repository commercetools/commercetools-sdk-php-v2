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
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataImagesStatusByTaskId;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataImagesStatus
 */
class ResourceByProjectKeyMissingDataImagesStatusTest extends TestCase
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
            'ResourceByProjectKeyMissingDataImagesStatusByTaskId' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataImagesStatusByTaskId {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->images()
                        ->status()
                        ->withTaskId("test_taskId");
                },
                ResourceByProjectKeyMissingDataImagesStatusByTaskId::class,
                ['projectKey' => 'test_projectKey', 'taskId' => 'test_taskId'],
                '/{projectKey}/missing-data/images/status/{taskId}'
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
