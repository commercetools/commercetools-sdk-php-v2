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

     * @return null|string
     */
    public function getSku();

    /**

     * @return null|string
     */
    public function getKey();

    /**

     * @return null|PriceDraftImportCollection
     */
    public function getPrices();

    /**

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**

     * @return null|ImageCollection
     */
    public function getImages();

    /**

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
