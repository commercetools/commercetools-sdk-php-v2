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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantDraft extends JsonObject
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

     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>Variant Attributes according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
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

     * @return null|AssetDraftCollection
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
     * @param ?PriceDraftCollection $prices
     */
    public function setPrices(?PriceDraftCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetDraftCollection $assets
     */
    public function setAssets(?AssetDraftCollection $assets): void;
}
