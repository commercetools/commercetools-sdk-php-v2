<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;

interface OrderDiscountCodeRemovedMessagePayload extends MessagePayload
{
    
    const FIELD_DISCOUNT_CODE = 'discountCode';

    /**
     *
     * @return DiscountCodeReference|null
     */
    public function getDiscountCode();
    public function setDiscountCode(?DiscountCodeReference $discountCode): void;
}