<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Test\Client;

use Commercetools\Base\ResultMapper;
use Commercetools\Client\ApiRequest;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class ApiRequestTest extends TestCase
{
    public function testMap()
    {
        $request = new ApiRequest('get', '/');

        $response = $this->prophesize(ResponseInterface::class);
        $mapper = $this->prophesize(ResultMapper::class);
        $mapped = ['foo' => 'bar'];
        $mapper->map($request, $response)->willReturn($mapped)->shouldBeCalled();


        $result = $request->map($response->reveal(), $mapper->reveal());
        $this->assertSame($mapped, $result);
    }

    public function testWithQueryParam()
    {
        $request = new ApiRequest('get', '/');
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
        $request = new ApiRequest('get', '/');
        $this->assertSame('application/json', $request->getHeaderLine('content-type'));
    }

    public function testEnsureHeaders()
    {
        $request = new ApiRequest('get', '/', ['X-Foo' => 'bar']);
        $this->assertSame('application/json', $request->getHeaderLine('content-type'));
        $this->assertSame('bar', $request->getHeaderLine('x-foo'));
    }
}
