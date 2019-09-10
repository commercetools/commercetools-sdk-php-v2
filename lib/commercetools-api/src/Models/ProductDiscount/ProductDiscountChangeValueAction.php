<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

interface ProductDiscountChangeValueAction extends ProductDiscountUpdateAction
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|ProductDiscountValue
     */
    public function getValue();

    public function setValue(?ProductDiscountValue $value): void;
}
