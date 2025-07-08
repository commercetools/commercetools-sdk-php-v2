<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface ProductVariantDraftImport extends JsonObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';

    /**
     * <p>User-defined unique SKU of the Product Variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>User-defined unique identifier for the ProductVariant.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The Embedded Prices for the Product Variant.
     * Each Price must have its unique Price scope (with same currency, country, Customer Group, Channel, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|PriceDraftImportCollection
     */
    public function getPrices();

    /**
     * <p>Attributes according to the respective AttributeDefinition.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Images for the Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Media assets for the Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?PriceDraftImportCollection $prices
     */
    public function setPrices(?PriceDraftImportCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;
}
