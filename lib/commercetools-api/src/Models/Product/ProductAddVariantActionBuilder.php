<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;

/**
 * @implements Builder<ProductAddVariantAction>
 */
final class ProductAddVariantActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?PriceDraftCollection
     */
    private $prices;

    /**
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

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
    public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }


    public function build(): ProductAddVariantAction
    {
        return new ProductAddVariantActionModel(
            $this->sku,
            $this->key,
            $this->prices,
            $this->images,
            $this->attributes,
            $this->staged,
            $this->assets
        );
    }

    public static function of(): ProductAddVariantActionBuilder
    {
        return new self();
    }
}
