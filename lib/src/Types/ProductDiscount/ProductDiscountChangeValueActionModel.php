<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductDiscount\ProductDiscountUpdateActionModel;

class ProductDiscountChangeValueActionModel extends ProductDiscountUpdateActionModel implements ProductDiscountChangeValueAction {
    const DISCRIMINATOR_VALUE = 'changeValue';

    /**
     * @var ProductDiscountValue
     */
    protected $value;

    /**
     * @return ProductDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ProductDiscountChangeValueAction::FIELD_VALUE);
            $resolvedClass = $this->resolveDiscriminator(ProductDiscountValue::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param ProductDiscountValue $value
     * @return $this
     */
    public function setValue(ProductDiscountValue $value)
    {
        $this->value = $value;

        return $this;
    }

}
