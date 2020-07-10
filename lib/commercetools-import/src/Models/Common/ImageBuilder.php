<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Image>
 */
final class ImageBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $url;

    /**
     * @var null|AssetDimensions|AssetDimensionsBuilder
     */
    private $dimensions;

    /**
     * @var ?string
     */
    private $label;

    /**
     * @return null|string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return null|AssetDimensions
     */
    public function getDimensions()
    {
        return $this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions;
    }

    /**
     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return $this
     */
    public function withUrl(?string $url)
    {
        $this->url = $url;

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
    public function withLabel(?string $label)
    {
        $this->label = $label;

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

    public function build(): Image
    {
        return new ImageModel(
            $this->url,
            $this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions,
            $this->label
        );
    }

    public static function of(): ImageBuilder
    {
        return new self();
    }
}
