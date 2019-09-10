<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;

interface OrderDiscountCodeStateSetMessage extends Message
{
    
    const FIELD_DISCOUNT_CODE = 'discountCode';
    const FIELD_STATE = 'state';
    const FIELD_OLD_STATE = 'oldState';

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
    
    /**
     *
     * @return string|null
     */
    public function getOldState();
    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
    
    public function setState(?string $state): void;
    
    public function setOldState(?string $oldState): void;
}