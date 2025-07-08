<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @implements Builder<ProductVariantDraftImport>
 */
final class ProductVariantDraftImportBuilder implements Builder
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

     * @var ?PriceDraftImportCollection
     */
    private $prices;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var ?ImageCollection
     */
    private $images;

    /**

     * @var ?AssetCollection
     */
    private $assets;

    /**
     * <p>User-defined unique SKU of the Product Variant.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>User-defined unique identifier for the ProductVariant.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The Embedded Prices for the Product Variant.
     * Each Price must have its unique Price scope (with same currency, country, Customer Group, Channel, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|PriceDraftImportCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * <p>Attributes according to the respective AttributeDefinition.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
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
     * @param ?PriceDraftImportCollection $prices
     * @return $this
     */
    public function withPrices(?PriceDraftImportCollection $prices)
    {
        $this->prices = $prices;

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
     * @param ?ImageCollection $images
     * @return $this
     */
    public function withImages(?ImageCollection $images)
    {
        $this->images = $images;

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


    public function build(): ProductVariantDraftImport
    {
        return new ProductVariantDraftImportModel(
            $this->sku,
            $this->key,
            $this->prices,
            $this->attributes,
            $this->images,
            $this->assets
        );
    }

    public static function of(): ProductVariantDraftImportBuilder
    {
        return new self();
    }
}
