<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;

class CachedTokenProvider implements TokenProvider
{
    public const TOKEN_CACHE_KEY = 'access_token';
    
    /** @psalm-var TokenProvider */
    private $provider;

    /** @psalm-var CacheItemPoolInterface|CacheInterface */
    private $cache;
    
    /** @psalm-var string */
    private $cacheKey;

    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|mixed $cache
     */
    public function __construct(TokenProvider $provider, $cache, string $cacheKey = null)
    {
        $this->validateCache($cache);
        $this->cache = $cache;
        $this->provider = $provider;
        $this->cacheKey = self::TOKEN_CACHE_KEY . "_" . ($cacheKey ?? sha1(self::TOKEN_CACHE_KEY));
    }

    /**
     * @psalm-assert CacheItemPoolInterface|CacheInterface $cache
     * @psalm-param CacheItemPoolInterface|CacheInterface|mixed $cache
     */
    private function validateCache($cache): void
    {
        if (!$cache instanceof CacheInterface && !$cache instanceof CacheItemPoolInterface) {
            throw new InvalidArgumentException();
        }
    }

    /**
     * @inheritDoc
     */
    public function getToken(): Token
    {
        $item = null;

        $token = $this->getCacheToken();
        if (!is_null($token)) {
            return new TokenModel($token);
        }

        return $this->refreshToken();
    }

    /**
     * @inheritDoc
     */
    public function refreshToken(): Token
    {
        $token = $this->provider->refreshToken();
        // ensure token to be invalidated in cache before TTL
        $ttl = max(1, ($token->getExpiresIn() - 300));

        $this->cache($token, $ttl);

        return $token;
    }

    private function getCacheToken(): ?string
    {
        $cache = $this->cache;
        if ($cache instanceof CacheInterface) {
            /** @psalm-var ?string */
            return $cache->get($this->cacheKey, null);
        }
        
        $item = $cache->getItem($this->cacheKey);
        if ($item->isHit()) {
            return (string)$item->get();
        }
        
        return null;
    }

    private function cache(Token $token, int $ttl): void
    {
        $cache = $this->cache;
        if ($cache instanceof CacheInterface) {
            $cache->set($this->cacheKey, $token->getValue(), $ttl);
        } else {
            $item = $cache->getItem($this->cacheKey)->set($token->getValue())->expiresAfter($ttl);
            $cache->save($item);
        }
    }
}
