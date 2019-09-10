<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;

interface ProductDiscountChangeValueAction extends ProductDiscountUpdateAction
{
    
    const FIELD_VALUE = 'value';

    /**
     *
     * @return ProductDiscountValue|null
     */
    public function getValue();
    public function setValue(?ProductDiscountValue $value): void;
}