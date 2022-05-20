<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssetSource>
 */
final class AssetSourceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $uri;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|AssetDimensions|AssetDimensionsBuilder
     */
    private $dimensions;

    /**
     * @var ?string
     */
    private $contentType;

    /**
     * <p>URI of the AssetSource.</p>
     *
     * @return null|string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * <p>User-defined unique identifier of the AssetSource.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Width and height of the AssetSource.</p>
     *
     * @return null|AssetDimensions
     */
    public function getDimensions()
    {
        return $this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions;
    }

    /**
     * <p>Indicates the type of content, for example <code>application/pdf</code>.</p>
     *
     * @return null|string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param ?string $uri
     * @return $this
     */
    public function withUri(?string $uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?AssetDimensions $dimensions
     * @return $this
     */
    public function withDimensions(?AssetDimensions $dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * @param ?string $contentType
     * @return $this
     */
    public function withContentType(?string $contentType)
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @deprecated use withDimensions() instead
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
            $this->uri,
            $this->key,
            $this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions,
            $this->contentType
        );
    }

    public static function of(): AssetSourceBuilder
    {
        return new self();
    }
}
