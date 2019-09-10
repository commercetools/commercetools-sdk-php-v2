<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;

interface ProductVariantImportDraft extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';

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
    public function setId(?int $id): void;
    
    public function setSku(?string $sku): void;
    
    public function setPrices(?PriceDraftCollection $prices): void;
    
    public function setAttributes(?AttributeCollection $attributes): void;
    
    public function setImages(?ImageCollection $images): void;
}