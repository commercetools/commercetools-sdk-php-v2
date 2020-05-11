<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Import\Test\Client;

use Commercetools\Import\Client\ImportRequestBuilder;
use Commercetools\Import\Client\Resource\ResourceByProjectKey;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;

class ImportRequestBuilderTest extends TestCase
{
    public function testConstruct()
    {
        $client = $this->createMock(ClientInterface::class);
        $root = new ImportRequestBuilder($client);
        $this->assertInstanceOf(ClientInterface::class, $root->getClient());
        $this->assertSame('', $root->getUri());
    }

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

    public function getResources()
    {
        return [
            'ResourceByProjectKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKey {
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
