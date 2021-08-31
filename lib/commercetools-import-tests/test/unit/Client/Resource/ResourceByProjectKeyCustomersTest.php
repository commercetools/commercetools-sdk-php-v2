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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyCustomersImportContainers;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyCustomers
 */
class ResourceByProjectKeyCustomersTest extends TestCase
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
            'ResourceByProjectKeyCustomersImportContainers' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyCustomersImportContainers {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->customers()
                        ->importContainers();
                },
                ResourceByProjectKeyCustomersImportContainers::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers/import-containers'
            ],
            'ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->customers()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey");
                },
                ResourceByProjectKeyCustomersImportSinkKeyByImportSinkKey::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey'],
                '/{projectKey}/customers/importSinkKey={importSinkKey}'
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
