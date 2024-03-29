<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountTargetCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountTargetCollection<CartDiscountLineItemsTarget>
 * @method CartDiscountLineItemsTarget current()
 * @method CartDiscountLineItemsTarget end()
 * @method CartDiscountLineItemsTarget at($offset)
 */
class CartDiscountLineItemsTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @psalm-assert CartDiscountLineItemsTarget $value
     * @psalm-param CartDiscountLineItemsTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountLineItemsTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountLineItemsTarget
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountLineItemsTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountLineItemsTarget $data */
                $data = CartDiscountLineItemsTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
