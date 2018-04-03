<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\CartDiscount\CartDiscountTargetModel;

class CartDiscountCustomLineItemsTargetModel extends CartDiscountTargetModel implements CartDiscountCustomLineItemsTarget {
    const DISCRIMINATOR_VALUE = 'customLineItems';

    /**
     * @var string
     */
    protected $predicate;

    /**
     * @return string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            $value = $this->raw(CartDiscountCustomLineItemsTarget::FIELD_PREDICATE);
            $value = (string)$value;
            $this->predicate = $value;
        }
        return $this->predicate;
    }

    /**
     * @param string $predicate
     * @return $this
     */
    public function setPredicate(string $predicate)
    {
        $this->predicate = (string)$predicate;

        return $this;
    }

}
