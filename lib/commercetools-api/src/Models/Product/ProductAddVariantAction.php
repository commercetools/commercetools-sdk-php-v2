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
use Commercetools\Api\Models\Common\PriceDraftCollection;

interface ProductAddVariantAction extends ProductUpdateAction
{
    
    const FIELD_SKU = 'sku';
    const FIELD_KEY = 'key';
    const FIELD_PRICES = 'prices';
    const FIELD_IMAGES = 'images';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_STAGED = 'staged';
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
     * @return ImageCollection|null
     */
    public function getImages();
    
    /**
     *
     * @return AttributeCollection|null
     */
    public function getAttributes();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    
    /**
     *
     * @return AssetCollection|null
     */
    public function getAssets();
    public function setSku(?string $sku): void;
    
    public function setKey(?string $key): void;
    
    public function setPrices(?PriceDraftCollection $prices): void;
    
    public function setImages(?ImageCollection $images): void;
    
    public function setAttributes(?AttributeCollection $attributes): void;
    
    public function setStaged(?bool $staged): void;
    
    public function setAssets(?AssetCollection $assets): void;
}