<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Price;

interface ProductDiscountMatchQuery extends JsonObject
{
    
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_STAGED = 'staged';
    const FIELD_PRICE = 'price';

    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    
    /**
     *
     * @return Price|null
     */
    public function getPrice();
    public function setProductId(?string $productId): void;
    
    public function setVariantId(?int $variantId): void;
    
    public function setStaged(?bool $staged): void;
    
    public function setPrice(?Price $price): void;
}