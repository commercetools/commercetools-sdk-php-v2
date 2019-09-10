<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Api\Models\Common\ScopedPriceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariant>
 */
final class ProductVariantBuilder implements Builder
{
    /**
     * @var ScopedPrice|?ScopedPriceBuilder
     */
    private $scopedPrice;

    /**
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @var ?bool
     */
    private $isMatchingVariant;

    /**
     * @var Price|?PriceBuilder
     */
    private $price;

    /**
     * @var ?bool
     */
    private $scopedPriceDiscounted;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ProductVariantAvailability|?ProductVariantAvailabilityBuilder
     */
    private $availability;

    /**
     * @var ?int
     */
    private $id;

    /**
     * @var ?PriceCollection
     */
    private $prices;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?string
     */
    private $key;

    public function __construct()
    {
    }

    /**
     * @return null|ScopedPrice
     */
    public function getScopedPrice()
    {
        return $this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice;
    }

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @return null|bool
     */
    public function getIsMatchingVariant()
    {
        return $this->isMatchingVariant;
    }

    /**
     * @return null|Price
     */
    public function getPrice()
    {
        return $this->price instanceof PriceBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|bool
     */
    public function getScopedPriceDiscounted()
    {
        return $this->scopedPriceDiscounted;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|ProductVariantAvailability
     */
    public function getAvailability()
    {
        return $this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability;
    }

    /**
     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|PriceCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

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
     * @return $this
     */
    public function withScopedPrice(?ScopedPrice $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

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
    public function withAssets(?AssetCollection $assets)
    {
        $this->assets = $assets;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIsMatchingVariant(?bool $isMatchingVariant)
    {
        $this->isMatchingVariant = $isMatchingVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withScopedPriceDiscounted(?bool $scopedPriceDiscounted)
    {
        $this->scopedPriceDiscounted = $scopedPriceDiscounted;

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
    public function withAvailability(?ProductVariantAvailability $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrices(?PriceCollection $prices)
    {
        $this->prices = $prices;

        return $this;
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
    public function withScopedPriceBuilder(?ScopedPriceBuilder $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?PriceBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAvailabilityBuilder(?ProductVariantAvailabilityBuilder $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    public function build(): ProductVariant
    {
        return new ProductVariantModel(
            ($this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice),
            $this->images,
            $this->assets,
            $this->isMatchingVariant,
            ($this->price instanceof PriceBuilder ? $this->price->build() : $this->price),
            $this->scopedPriceDiscounted,
            $this->attributes,
            ($this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability),
            $this->id,
            $this->prices,
            $this->sku,
            $this->key
        );
    }

    public static function of(): ProductVariantBuilder
    {
        return new self();
    }
}
