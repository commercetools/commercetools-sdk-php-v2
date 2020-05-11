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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSummaries
 */
class ResourceByProjectKeyImportSummariesTest extends TestCase
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
            'ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importSummaries()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey");
                },
                ResourceByProjectKeyImportSummariesImportSinkKeyByImportSinkKey::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey'],
                '/{projectKey}/import-summaries/importSinkKey={importSinkKey}'
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
