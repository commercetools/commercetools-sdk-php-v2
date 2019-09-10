<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\PriceDraftCollection;

interface ProductSetPricesAction extends ProductUpdateAction
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
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
     * @return bool|null
     */
    public function getStaged();
    public function setVariantId(?int $variantId): void;
    
    public function setSku(?string $sku): void;
    
    public function setPrices(?PriceDraftCollection $prices): void;
    
    public function setStaged(?bool $staged): void;
}