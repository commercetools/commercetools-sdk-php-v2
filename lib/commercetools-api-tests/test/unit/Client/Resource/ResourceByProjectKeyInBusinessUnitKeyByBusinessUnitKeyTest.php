<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMe;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKey
 */
class ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyTest extends TestCase
{
    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
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
            'ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMe' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMe {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->me();
                },
                ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKeyMe::class,
                ['projectKey' => 'test_projectKey', 'businessUnitKey' => 'test_businessUnitKey'],
                '/{projectKey}/in-business-unit/key={businessUnitKey}/me'
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
