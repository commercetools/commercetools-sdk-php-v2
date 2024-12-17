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
 * @extends CartDiscountTargetCollection<CartDiscountPatternTarget>
 * @method CartDiscountPatternTarget current()
 * @method CartDiscountPatternTarget end()
 * @method CartDiscountPatternTarget at($offset)
 */
class CartDiscountPatternTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @psalm-assert CartDiscountPatternTarget $value
     * @psalm-param CartDiscountPatternTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountPatternTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountPatternTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountPatternTarget
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountPatternTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountPatternTarget $data */
                $data = CartDiscountPatternTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
