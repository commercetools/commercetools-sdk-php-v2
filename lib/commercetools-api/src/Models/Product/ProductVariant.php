<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Api\Models\Common\ScopedPrice;

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
     *
     * @return int|null
     */
    public function getId();
    
    /**
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return PriceCollection|null
     */
    public function getPrices();
    
    /**
     *
     * @return AttributeCollection|null
     */
    public function getAttributes();
    
    /**
     *
     * @return Price|null
     */
    public function getPrice();
    
    /**
     *
     * @return ImageCollection|null
     */
    public function getImages();
    
    /**
     *
     * @return AssetCollection|null
     */
    public function getAssets();
    
    /**
     *
     * @return ProductVariantAvailability|null
     */
    public function getAvailability();
    
    /**
     *
     * @return bool|null
     */
    public function getIsMatchingVariant();
    
    /**
     *
     * @return ScopedPrice|null
     */
    public function getScopedPrice();
    
    /**
     *
     * @return bool|null
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