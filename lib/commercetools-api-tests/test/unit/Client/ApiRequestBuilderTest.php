<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Api\Test\Client;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;

class ApiRequestBuilderTest extends TestCase
{
    public function testConstruct()
    {
        $client = $this->prophesize(ClientInterface::class);
        $root = new ApiRequestBuilder($client->reveal());
        $this->assertInstanceOf(ClientInterface::class, $root->getClient());
        $this->assertSame('', $root->getUri());
    }

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

    public function getResources()
    {
        return [
            'ResourceByProjectKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKey {
                    return $builder
                        ->withProjectKey("projectKey");
                },
                ResourceByProjectKey::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}'
            ]
        ];
    }
}
