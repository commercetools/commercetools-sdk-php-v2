<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\History\Test\Client;

use Commercetools\History\Client\Resource\ResourceByProjectKey;
use Commercetools\History\Client\HistoryRequestBuilder;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\ClientInterface;

class HistoryRequestBuilderTest extends TestCase
{
    public function testConstruct()
    {
        $client = $this->createMock(ClientInterface::class);
        $root = new HistoryRequestBuilder($client);
        $this->assertInstanceOf(ClientInterface::class, $root->getClient());
        $this->assertSame('', $root->getUri());
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new HistoryRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKey' => [
                function (HistoryRequestBuilder $builder): ResourceByProjectKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey");
                },
                ResourceByProjectKey::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}'
            ]
        ];
    }
}
