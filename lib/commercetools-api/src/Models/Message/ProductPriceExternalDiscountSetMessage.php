<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\DiscountedPrice;

interface ProductPriceExternalDiscountSetMessage extends Message
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_VARIANT_KEY = 'variantKey';
    const FIELD_SKU = 'sku';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_DISCOUNTED = 'discounted';
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
    public function getVariantKey();
    
    /**
     *
     * @return string|null
     */
    public function getSku();
    
    /**
     *
     * @return string|null
     */
    public function getPriceId();
    
    /**
     *
     * @return DiscountedPrice|null
     */
    public function getDiscounted();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setVariantId(?int $variantId): void;
    
    public function setVariantKey(?string $variantKey): void;
    
    public function setSku(?string $sku): void;
    
    public function setPriceId(?string $priceId): void;
    
    public function setDiscounted(?DiscountedPrice $discounted): void;
    
    public function setStaged(?bool $staged): void;
}