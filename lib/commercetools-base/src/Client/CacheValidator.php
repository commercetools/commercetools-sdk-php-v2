<?php

namespace Commercetools\Client;

use Psr\Cache\CacheItemPoolInterface;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

final class CacheValidator
{
    /**
     * @psalm-param CacheItemPoolInterface|CacheInterface|null $cache
     * @psalm-return CacheItemPoolInterface|CacheInterface
     */
    public static function validateCache($cache = null)
    {
        if ($cache instanceof CacheItemPoolInterface || $cache instanceof CacheInterface) {
            return $cache;
        }

        if (class_exists('Symfony\Component\Cache\Simple\FilesystemCache')) {
            /** @psalm-suppress all */
            /** @var CacheItemPoolInterface $cache */
            $cache = new FilesystemCache('', 0, getcwd() . "/cache");
        } else {
            /** @psalm-suppress all */
            /** @var CacheItemPoolInterface $cache */
            $cache = new FilesystemAdapter('', 0, getcwd() . "/cache");
        }

        return $cache;
    }
}
