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
 * @extends CartDiscountTargetCollection<CartDiscountCustomLineItemsTarget>
 * @method CartDiscountCustomLineItemsTarget current()
 * @method CartDiscountCustomLineItemsTarget at($offset)
 */
class CartDiscountCustomLineItemsTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @psalm-assert CartDiscountCustomLineItemsTarget $value
     * @psalm-param CartDiscountCustomLineItemsTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountCustomLineItemsTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountCustomLineItemsTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountCustomLineItemsTarget
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountCustomLineItemsTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountCustomLineItemsTarget $data */
                $data = CartDiscountCustomLineItemsTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
