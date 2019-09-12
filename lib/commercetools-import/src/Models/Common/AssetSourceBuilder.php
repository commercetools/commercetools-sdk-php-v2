<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AssetSource>
 */
final class AssetSourceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $contentType;

    /**
     * @var ?string
     */
    private $uri;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var AssetDimensions|?AssetDimensionsBuilder
     */
    private $dimensions;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @return null|string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|AssetDimensions
     */
    public function getDimensions()
    {
        return $this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions;
    }

    /**
     * @return $this
     */
    public function withContentType(?string $contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withUri(?string $uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDimensions(?AssetDimensions $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDimensionsBuilder(?AssetDimensionsBuilder $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function build(): AssetSource
    {
        return new AssetSourceModel(
            $this->contentType,
            $this->uri,
            $this->key,
            ($this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions)
        );
    }

    public static function of(): AssetSourceBuilder
    {
        return new self();
    }
}
