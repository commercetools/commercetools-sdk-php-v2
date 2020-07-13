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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariant extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_KEY = 'key';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_PRICE = 'price';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_AVAILABILITY = 'availability';
    public const FIELD_IS_MATCHING_VARIANT = 'isMatchingVariant';
    public const FIELD_SCOPED_PRICE = 'scopedPrice';
    public const FIELD_SCOPED_PRICE_DISCOUNTED = 'scopedPriceDiscounted';

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

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?PriceCollection $prices
     */
    public function setPrices(?PriceCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?ProductVariantAvailability $availability
     */
    public function setAvailability(?ProductVariantAvailability $availability): void;

    /**
     * @param ?bool $isMatchingVariant
     */
    public function setIsMatchingVariant(?bool $isMatchingVariant): void;

    /**
     * @param ?ScopedPrice $scopedPrice
     */
    public function setScopedPrice(?ScopedPrice $scopedPrice): void;

    /**
     * @param ?bool $scopedPriceDiscounted
     */
    public function setScopedPriceDiscounted(?bool $scopedPriceDiscounted): void;
}
