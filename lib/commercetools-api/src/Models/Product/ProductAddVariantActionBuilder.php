<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p>Value to set. Must be unique.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Value to set. Must be unique.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Embedded Prices for the Product Variant.</p>
     *

     * @return null|PriceDraftCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>Images for the Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * <p>Attributes for the Product Variant.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * <p>If <code>true</code> the new Product Variant is only staged. If <code>false</code> the new Product Variant is both current and staged.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Media assets for the Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

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
     * @param ?PriceDraftCollection $prices
     * @return $this
     */
    public function withPrices(?PriceDraftCollection $prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?AssetCollection $assets
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
