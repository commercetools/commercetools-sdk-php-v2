<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Import\Client\ImportRequestBuilder;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductSelectionsImportContainersByImportContainerKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductSelectionsImportContainers
 */
class ResourceByProjectKeyProductSelectionsImportContainersTest extends TestCase
{
    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ImportRequestBuilder();
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
            'ResourceByProjectKeyProductSelectionsImportContainersByImportContainerKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductSelectionsImportContainersByImportContainerKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productSelections()
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey");
                },
                ResourceByProjectKeyProductSelectionsImportContainersByImportContainerKey::class,
                ['projectKey' => 'test_projectKey', 'importContainerKey' => 'test_importContainerKey'],
                '/{projectKey}/product-selections/import-containers/{importContainerKey}'
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
