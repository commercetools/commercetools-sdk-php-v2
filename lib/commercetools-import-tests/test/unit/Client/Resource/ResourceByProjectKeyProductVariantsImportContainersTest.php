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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantsImportContainersByImportContainerKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantsImportContainers
 */
class ResourceByProjectKeyProductVariantsImportContainersTest extends TestCase
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
            'ResourceByProjectKeyProductVariantsImportContainersByImportContainerKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductVariantsImportContainersByImportContainerKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productVariants()
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey");
                },
                ResourceByProjectKeyProductVariantsImportContainersByImportContainerKey::class,
                ['projectKey' => 'test_projectKey', 'importContainerKey' => 'test_importContainerKey'],
                '/{projectKey}/product-variants/import-containers/{importContainerKey}'
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
