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
     * @var ?int
     */
    private $id;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?PriceCollection
     */
    private $prices;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var null|Price|PriceBuilder
     */
    private $price;

    /**
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AssetCollection
     */
    private $assets;

    /**
     * @var null|ProductVariantAvailability|ProductVariantAvailabilityBuilder
     */
    private $availability;

    /**
     * @var ?bool
     */
    private $isMatchingVariant;

    /**
     * @var null|ScopedPrice|ScopedPriceBuilder
     */
    private $scopedPrice;

    /**
     * @var ?bool
     */
    private $scopedPriceDiscounted;

    /**
     * @return null|int
     */
    public function getId()
    {
        return $this->id;
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
     * @return null|PriceCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|Price
     */
    public function getPrice()
    {
        return $this->price instanceof PriceBuilder ? $this->price->build() : $this->price;
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
     * @return null|ProductVariantAvailability
     */
    public function getAvailability()
    {
        return $this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability;
    }

    /**
     * @return null|bool
     */
    public function getIsMatchingVariant()
    {
        return $this->isMatchingVariant;
    }

    /**
     * @return null|ScopedPrice
     */
    public function getScopedPrice()
    {
        return $this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice;
    }

    /**
     * @return null|bool
     */
    public function getScopedPriceDiscounted()
    {
        return $this->scopedPriceDiscounted;
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
    public function withPrices(?PriceCollection $prices)
    {
        $this->prices = $prices;

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
    public function withPrice(?Price $price)
    {
        $this->price = $price;

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
    public function withAvailability(?ProductVariantAvailability $availability)
    {
        $this->availability = $availability;

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
    public function withScopedPrice(?ScopedPrice $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

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

    /**
     * @return $this
     */
    public function withScopedPriceBuilder(?ScopedPriceBuilder $scopedPrice)
    {
        $this->scopedPrice = $scopedPrice;

        return $this;
    }

    public function build(): ProductVariant
    {
        return new ProductVariantModel(
            $this->id,
            $this->sku,
            $this->key,
            $this->prices,
            $this->attributes,
            $this->price instanceof PriceBuilder ? $this->price->build() : $this->price,
            $this->images,
            $this->assets,
            $this->availability instanceof ProductVariantAvailabilityBuilder ? $this->availability->build() : $this->availability,
            $this->isMatchingVariant,
            $this->scopedPrice instanceof ScopedPriceBuilder ? $this->scopedPrice->build() : $this->scopedPrice,
            $this->scopedPriceDiscounted
        );
    }

    public static function of(): ProductVariantBuilder
    {
        return new self();
    }
}
