<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

use Commercetools\Types\ProductDiscount\ProductDiscountReference;

interface DiscountedPrice extends JsonObject {
    const FIELD_VALUE = 'value';
    const FIELD_DISCOUNT = 'discount';

    /**
     * @return Money
     */
    public function getValue();

    /**
     * @return ProductDiscountReference
     */
    public function getDiscount();

    /**
     * @param Money $value
     * @return $this
     */
    public function setValue(Money $value);

    /**
     * @param ProductDiscountReference $discount
     * @return $this
     */
    public function setDiscount(ProductDiscountReference $discount);

}
