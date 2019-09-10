<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;

interface VariantValues extends JsonObject
{
    
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';

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
    public function setSku(?string $sku): void;
    
    public function setPrices(?PriceDraftCollection $prices): void;
    
    public function setAttributes(?AttributeCollection $attributes): void;
}