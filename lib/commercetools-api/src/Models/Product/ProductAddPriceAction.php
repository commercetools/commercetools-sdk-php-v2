<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\PriceDraft;

interface ProductAddPriceAction extends ProductUpdateAction
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
    const FIELD_PRICE = 'price';
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
     * @return PriceDraft|null
     */
    public function getPrice();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setVariantId(?int $variantId): void;
    
    public function setSku(?string $sku): void;
    
    public function setPrice(?PriceDraft $price): void;
    
    public function setStaged(?bool $staged): void;
}