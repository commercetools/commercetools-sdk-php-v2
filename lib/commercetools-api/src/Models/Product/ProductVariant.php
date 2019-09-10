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
use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Api\Models\Common\ScopedPrice;
use Commercetools\Base\JsonObject;

interface ProductVariant extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_KEY = 'key';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_PRICE = 'price';
    const FIELD_IMAGES = 'images';
    const FIELD_ASSETS = 'assets';
    const FIELD_AVAILABILITY = 'availability';
    const FIELD_IS_MATCHING_VARIANT = 'isMatchingVariant';
    const FIELD_SCOPED_PRICE = 'scopedPrice';
    const FIELD_SCOPED_PRICE_DISCOUNTED = 'scopedPriceDiscounted';

    /**
     * @return null|int
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|PriceCollection
     */
    public function getPrices();

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @return null|Price
     */
    public function getPrice();

    /**
     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * @return null|ProductVariantAvailability
     */
    public function getAvailability();

    /**
     * @return null|bool
     */
    public function getIsMatchingVariant();

    /**
     * @return null|ScopedPrice
     */
    public function getScopedPrice();

    /**
     * @return null|bool
     */
    public function getScopedPriceDiscounted();

    public function setId(?int $id): void;

    public function setSku(?string $sku): void;

    public function setKey(?string $key): void;

    public function setPrices(?PriceCollection $prices): void;

    public function setAttributes(?AttributeCollection $attributes): void;

    public function setPrice(?Price $price): void;

    public function setImages(?ImageCollection $images): void;

    public function setAssets(?AssetCollection $assets): void;

    public function setAvailability(?ProductVariantAvailability $availability): void;

    public function setIsMatchingVariant(?bool $isMatchingVariant): void;

    public function setScopedPrice(?ScopedPrice $scopedPrice): void;

    public function setScopedPriceDiscounted(?bool $scopedPriceDiscounted): void;
}
