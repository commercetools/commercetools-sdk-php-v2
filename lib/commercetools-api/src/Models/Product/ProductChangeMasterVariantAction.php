<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;

interface ProductChangeMasterVariantAction extends ProductUpdateAction
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SKU = 'sku';
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
     * @return bool|null
     */
    public function getStaged();
    public function setVariantId(?int $variantId): void;
    
    public function setSku(?string $sku): void;
    
    public function setStaged(?bool $staged): void;
}