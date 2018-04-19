<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

interface ProductDiscountChangeValueAction extends ProductDiscountUpdateAction
{
    const FIELD_VALUE = 'value';

    /**
     * @return ProductDiscountValue
     */
    public function getValue();

    /**
     * @param ProductDiscountValue $value
     * @return $this
     */
    public function setValue(ProductDiscountValue $value);

}
