<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;

interface CartDiscountChangeValueAction extends CartDiscountUpdateAction
{
    
    const FIELD_VALUE = 'value';

    /**
     *
     * @return CartDiscountValue|null
     */
    public function getValue();
    public function setValue(?CartDiscountValue $value): void;
}