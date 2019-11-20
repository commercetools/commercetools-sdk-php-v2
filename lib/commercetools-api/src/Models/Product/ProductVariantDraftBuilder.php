<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductVariantDraft>
 */
final class ProductVariantDraftBuilder implements Builder
{
    /**
     * @var ?ImageCollection
     */
    private $images;

    /**
     * @var ?AssetDraftCollection
     */
    private $assets;

    /**
     * @var ?AttributeCollection
     */
    private $attributes;

    /**
     * @var ?PriceDraftCollection
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

    /**
     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return null|AssetDraftCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return null|PriceDraftCollection
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
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;

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
    public function withPrices(?PriceDraftCollection $prices)
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

    public function build(): ProductVariantDraft
    {
        return new ProductVariantDraftModel(
            $this->images,
            $this->assets,
            $this->attributes,
            $this->prices,
            $this->sku,
            $this->key
        );
    }

    public static function of(): ProductVariantDraftBuilder
    {
        return new self();
    }
}
