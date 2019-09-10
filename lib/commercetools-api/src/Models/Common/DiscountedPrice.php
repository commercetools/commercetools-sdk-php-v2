<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;

interface DiscountedPrice extends JsonObject
{
    
    const FIELD_VALUE = 'value';
    const FIELD_DISCOUNT = 'discount';

    /**
     *
     * @return Money|null
     */
    public function getValue();
    
    /**
     *
     * @return ProductDiscountReference|null
     */
    public function getDiscount();
    public function setValue(?Money $value): void;
    
    public function setDiscount(?ProductDiscountReference $discount): void;
}