<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productdrafts;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\AssetCollection;
use Models\Common\ImageCollection;
use Models\Productvariants\AttributeCollection;

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

    public function setSku(?string $sku): void;

    public function setKey(?string $key): void;

    public function setPrices(?PriceDraftImportCollection $prices): void;

    public function setAttributes(?AttributeCollection $attributes): void;

    public function setImages(?ImageCollection $images): void;

    public function setAssets(?AssetCollection $assets): void;
}
