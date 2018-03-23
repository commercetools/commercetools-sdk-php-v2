<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Test\Client;

use Commercetools\Client\OAuth2Handler;
use Commercetools\Client\TokenModel;
use Commercetools\Client\TokenProvider;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

class OAuth2HandlerTest extends TestCase
{

    public function testInvoke()
    {
        $provider = $this->prophesize(TokenProvider::class);
        $provider->getToken()->willReturn(new TokenModel('tokenValue', 1))->shouldBeCalled();

        $item = $this->prophesize(CacheItemInterface::class);
        $item->isHit()->willReturn(false);
        $item->set('tokenValue')->shouldBeCalled();
        $item->expiresAfter(1)->shouldBeCalled();
        $cache = $this->prophesize(CacheItemPoolInterface::class);
        $cache->getItem(sha1('access_token'))->willReturn($item->reveal())->shouldBeCalled();
        $cache->save($item->reveal())->shouldBeCalled();

        $handler = new OAuth2Handler($provider->reveal(), $cache->reveal());

        $request = new Request('get', '/');
        $result = $handler($request);

        $this->assertSame('Bearer tokenValue' , $result->getHeaderLine('Authorization'));
    }

    public function testCacheHit()
    {
        $provider = $this->prophesize(TokenProvider::class);
        $provider->getToken()->shouldNotBeCalled();

        $item = $this->prophesize(CacheItemInterface::class);
        $item->isHit()->willReturn(true);
        $item->get()->willReturn('tokenValue');

        $cache = $this->prophesize(CacheItemPoolInterface::class);
        $cache->getItem(sha1('access_token'))->willReturn($item->reveal())->shouldBeCalled();

        $handler = new OAuth2Handler($provider->reveal(), $cache->reveal());

        $request = new Request('get', '/');
        $result = $handler($request);

        $this->assertSame('Bearer tokenValue' , $result->getHeaderLine('Authorization'));
    }

    public function testGetAuthorizationHeaderCacheHit()
    {
        $provider = $this->prophesize(TokenProvider::class);
        $provider->getToken()->shouldNotBeCalled();

        $item = $this->prophesize(CacheItemInterface::class);
        $item->isHit()->willReturn(true);
        $item->get()->willReturn('tokenValue');

        $cache = $this->prophesize(CacheItemPoolInterface::class);
        $cache->getItem(sha1('access_token'))->willReturn($item->reveal())->shouldBeCalled();

        $handler = new OAuth2Handler($provider->reveal(), $cache->reveal());

        $result = $handler->getAuthorizationHeader();

        $this->assertSame('Bearer tokenValue' , $result);
    }

    public function testGetAuthorizationHeader()
    {
        $provider = $this->prophesize(TokenProvider::class);
        $provider->getToken()->willReturn(new TokenModel('tokenValue', 1))->shouldBeCalled();

        $item = $this->prophesize(CacheItemInterface::class);
        $item->isHit()->willReturn(false);
        $item->set('tokenValue')->shouldBeCalled();
        $item->expiresAfter(1)->shouldBeCalled();
        $cache = $this->prophesize(CacheItemPoolInterface::class);
        $cache->getItem(sha1('access_token'))->willReturn($item->reveal())->shouldBeCalled();
        $cache->save($item->reveal())->shouldBeCalled();

        $handler = new OAuth2Handler($provider->reveal(), $cache->reveal());

        $result = $handler->getAuthorizationHeader();

        $this->assertSame('Bearer tokenValue' , $result);
    }
}
