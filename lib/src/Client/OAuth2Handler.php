<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */
namespace Commercetools\Client;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Message\RequestInterface;

class OAuth2Handler {

    /**
     * @var TokenProvider
     */
    private $provider;
    /**
     * @var CacheItemPoolInterface
     */
    private $cache;

    /**
     * OAuth2Handler constructor.
     * @param TokenProvider $provider
     * @param CacheItemPoolInterface $cache
     */
    public function __construct(TokenProvider $provider, CacheItemPoolInterface $cache = null) {
        $this->provider = $provider;
        if (is_null($cache)) {
            $filesystemAdapter = new Local(__DIR__.'/');
            $filesystem        = new Filesystem($filesystemAdapter);
            $cache = new FilesystemCachePool($filesystem);
        }
        $this->cache = $cache;
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return RequestInterface
     */
    public function __invoke(RequestInterface $request, array $options = []): RequestInterface {
        return $request->withHeader('Authorization', $this->getAuthorizationHeader());
    }

    /**
     * @return string
     */
    public function getAuthorizationHeader(): string
    {
        return 'Bearer ' . $this->getBearerToken();
    }

    /**
     * @return string
     */
    private function getBearerToken(): string
    {
        $item = null;
        if (!is_null($this->cache)) {
            $item = $this->cache->getItem(sha1('access_token'));
            if ($item->isHit()) {
                return (string)$item->get();
            }
        }

        $token = $this->provider->getToken();
        // ensure token to be invalidated in cache before TTL
        $ttl = max(1, floor($token->getExpiresIn()/2));
        $this->saveToken($token->getValue(), $item, (int)$ttl);

        return $token->getValue();
    }

    /**
     * @param string $token
     * @param CacheItemInterface $item
     * @param int $ttl
     */
    private function saveToken(string $token, CacheItemInterface $item, int $ttl)
    {
        if (!is_null($this->cache)) {
            $item->set($token);
            $item->expiresAfter($ttl);
            $this->cache->save($item);
        }
    }
}
