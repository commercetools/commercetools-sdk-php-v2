<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;

interface ProductVariantDraft extends JsonObject
{
    
    const FIELD_SKU = 'sku';
    const FIELD_KEY = 'key';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';
    const FIELD_ASSETS = 'assets';

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
     * @return PriceDraftCollection|null
     */
    public function getPrices();
    
    /**
     *
     * @return AttributeCollection|null
     */
    public function getAttributes();
    
    /**
     *
     * @return ImageCollection|null
     */
    public function getImages();
    
    /**
     *
     * @return AssetDraftCollection|null
     */
    public function getAssets();
    public function setSku(?string $sku): void;
    
    public function setKey(?string $key): void;
    
    public function setPrices(?PriceDraftCollection $prices): void;
    
    public function setAttributes(?AttributeCollection $attributes): void;
    
    public function setImages(?ImageCollection $images): void;
    
    public function setAssets(?AssetDraftCollection $assets): void;
}