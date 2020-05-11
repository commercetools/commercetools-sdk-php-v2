<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Ml\Test\Client;

use Commercetools\Ml\Client\MlRequestBuilder;
use Commercetools\Ml\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;

class MlRequestBuilderTest extends TestCase
{
    public function testConstruct()
    {
        $client = $this->createMock(ClientInterface::class);
        $root = new MlRequestBuilder($client);
        $this->assertInstanceOf(ClientInterface::class, $root->getClient());
        $this->assertSame('', $root->getUri());
    }

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

    public function getResources()
    {
        return [
            'ResourceByProjectKey' => [
                function (MlRequestBuilder $builder): ResourceByProjectKey {
                    return $builder
                        ->withProjectKey("test_projectKey");
                },
                ResourceByProjectKey::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}'
            ]
        ];
    }
}
