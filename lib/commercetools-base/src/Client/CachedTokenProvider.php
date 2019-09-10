<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Client;

use Commercetools\Exception\InvalidArgumentException;
use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;

class CachedTokenProvider implements TokenProvider
{
    const TOKEN_CACHE_KEY = 'access_token';

    /** @var TokenProvider */
    private $provider;

    /** @var CacheInterface|CacheItemPoolInterface */
    private $cache;

    /** @var string */
    private $cacheKey;

    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|mixed $cache
     *
     * @param mixed $cache
     */
    public function __construct(TokenProvider $provider, $cache, string $cacheKey = null)
    {
        $this->validateCache($cache);
        $this->cache = $cache;
        $this->provider = $provider;
        $this->cacheKey = self::TOKEN_CACHE_KEY.'_'.($cacheKey ?? sha1(self::TOKEN_CACHE_KEY));
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function refreshToken(): Token
    {
        $token = $this->provider->refreshToken();
        // ensure token to be invalidated in cache before TTL
        $ttl = max(1, ($token->getExpiresIn() - 300));

        $this->cache($token, $ttl);

        return $token;
    }

    /**
     * @psalm-assert CacheItemPoolInterface|CacheInterface $cache
     * @psalm-param CacheItemPoolInterface|CacheInterface|mixed $cache
     *
     * @param mixed $cache
     */
    private function validateCache($cache): void
    {
        if (!$cache instanceof CacheInterface && !$cache instanceof CacheItemPoolInterface) {
            throw new InvalidArgumentException();
        }
    }

    private function getCacheToken(): ?string
    {
        $cache = $this->cache;
        if ($cache instanceof CacheInterface) {
            /** @var ?string $var */
            return $cache->get($this->cacheKey, null);
        }

        $item = $cache->getItem($this->cacheKey);
        if ($item->isHit()) {
            return (string) $item->get();
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
