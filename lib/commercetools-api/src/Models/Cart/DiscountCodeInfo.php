<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;

interface DiscountCodeInfo extends JsonObject
{
    
    const FIELD_DISCOUNT_CODE = 'discountCode';
    const FIELD_STATE = 'state';

    /**
     *
     * @return DiscountCodeReference|null
     */
    public function getDiscountCode();
    
    /**
     *
     * @return string|null
     */
    public function getState();
    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
    
    public function setState(?string $state): void;
}