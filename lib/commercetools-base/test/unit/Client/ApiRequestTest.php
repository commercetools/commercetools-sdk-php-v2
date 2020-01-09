<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Test\Client;

use Commercetools\Client\ApiRequest;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Commercetools\Client\ApiRequest
 *
 * @internal
 */
class ApiRequestTest extends TestCase
{
    public function testWithQueryParam()
    {
        $client = $this->prophesize(Client::class);
        $request = new ApiRequest($client->reveal(), 'get', '/');
        $request = $request->withQueryParam('foo', 'bar');
        $this->assertSame('foo=bar', $request->getUri()->getQuery());
        $request = $request->withQueryParam('foo', 'baz');
        $this->assertSame('foo=bar&foo=baz', $request->getUri()->getQuery());
        $request = $request->withQueryParam('bar', 'foo');
        $this->assertSame('bar=foo&foo=bar&foo=baz', $request->getUri()->getQuery());
        $request = $request->withQueryParam('bar', 'baz');
        $this->assertSame('bar=foo&bar=baz&foo=bar&foo=baz', $request->getUri()->getQuery());
    }

    public function testContentTypeHeader()
    {
        $client = $this->prophesize(Client::class);
        $request = new ApiRequest($client->reveal(), 'get', '/');
        $this->assertSame('application/json', $request->getHeaderLine('content-type'));
    }

    public function testEnsureHeaders()
    {
        $client = $this->prophesize(Client::class);
        $request = new ApiRequest($client->reveal(), 'get', '/', ['X-Foo' => 'bar']);
        $this->assertSame('application/json', $request->getHeaderLine('content-type'));
        $this->assertSame('bar', $request->getHeaderLine('x-foo'));
    }
}
