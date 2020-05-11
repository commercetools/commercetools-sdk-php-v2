<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Test\Client;

use Commercetools\Base\JsonObject;
use Commercetools\Base\ResultMapper;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\ClientInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @covers \Commercetools\Client\ApiRequest
 */
class ApiRequestTest extends TestCase
{
    public function testWithQueryParam()
    {
        $client = $this->createMock(ClientInterface::class);
        $request = new ApiRequest($client, 'get', '/');
        $request = $request->withQueryParam('foo', 'bar');
        $this->assertSame('foo=bar', $request->getUri()->getQuery());
        $request = $request->withQueryParam('foo', 'baz');
        $this->assertSame('foo=bar&foo=baz', $request->getUri()->getQuery());
        $request = $request->withQueryParam('bar', 'foo');
        $this->assertSame('bar=foo&foo=bar&foo=baz', $request->getUri()->getQuery());
        $request = $request->withQueryParam('bar', 'baz');
        $this->assertSame('bar=foo&bar=baz&foo=bar&foo=baz', $request->getUri()->getQuery());
    }

    public function testWithQueryParamArray()
    {
        $client = $this->createMock(ClientInterface::class);
        $request = new ApiRequest($client, 'get', '/');
        $request = $request->withQueryParam('foo', ['bar']);
        $this->assertSame('foo=bar', $request->getUri()->getQuery());
        $request = $request->withQueryParam('foo', 'baz');
        $this->assertSame('foo=bar&foo=baz', $request->getUri()->getQuery());
        $request = $request->withQueryParam('bar', ['foo', 'baz']);
        $this->assertSame('bar=foo&bar=baz&foo=bar&foo=baz', $request->getUri()->getQuery());
    }

    public function testContentTypeHeader()
    {
        $client = $this->createMock(ClientInterface::class);
        $request = new ApiRequest($client, 'get', '/');
        $this->assertSame('application/json', $request->getHeaderLine('content-type'));
    }

    public function testEnsureHeaders()
    {
        $client = $this->createMock(ClientInterface::class);
        $request = new ApiRequest($client, 'get', '/', ['X-Foo' => 'bar']);
        $this->assertSame('application/json', $request->getHeaderLine('content-type'));
        $this->assertSame('bar', $request->getHeaderLine('x-foo'));
    }
}
