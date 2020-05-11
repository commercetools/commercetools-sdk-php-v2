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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyPrices
 */
class ResourceByProjectKeyPricesTest extends TestCase
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
            'ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey");
                },
                ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey'],
                '/{projectKey}/prices/importSinkKey={importSinkKey}'
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
