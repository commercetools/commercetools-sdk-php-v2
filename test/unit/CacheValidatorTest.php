<?php

namespace Commercetools\UnitTest;

use Commercetools\Client\CacheValidator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Simple\FilesystemCache;

class CacheValidatorTest extends TestCase
{
    public function testDefaultCache()
    {
        if (class_exists('Symfony\Component\Cache\Simple\FilesystemCache')) {
            $this->assertInstanceOf(FilesystemCache::class, CacheValidator::validateCache());
        } else {
            $this->assertInstanceOf(FilesystemAdapter::class, CacheValidator::validateCache());
        }
    }
}
