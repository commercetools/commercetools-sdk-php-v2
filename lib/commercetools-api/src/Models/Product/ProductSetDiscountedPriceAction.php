<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\DiscountedPrice;

interface ProductSetDiscountedPriceAction extends ProductUpdateAction
{
    
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';
    const FIELD_DISCOUNTED = 'discounted';

    /**
     *
     * @return string|null
     */
    public function getPriceId();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    
    /**
     *
     * @return DiscountedPrice|null
     */
    public function getDiscounted();
    public function setPriceId(?string $priceId): void;
    
    public function setStaged(?bool $staged): void;
    
    public function setDiscounted(?DiscountedPrice $discounted): void;
}