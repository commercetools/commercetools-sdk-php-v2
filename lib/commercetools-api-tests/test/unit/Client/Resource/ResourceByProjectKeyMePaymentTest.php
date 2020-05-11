<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePaymentByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePaymentKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMePayment
 */
class ResourceByProjectKeyMePaymentTest extends TestCase
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
            'ResourceByProjectKeyMePaymentKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePaymentKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payment()
                        ->keyWithKeyValue("test_key");
                },
                ResourceByProjectKeyMePaymentKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/me/payment/key={key}'
            ],
            'ResourceByProjectKeyMePaymentByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePaymentByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payment()
                        ->withIDValue("test_ID");
                },
                ResourceByProjectKeyMePaymentByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/me/payment/{ID}'
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
