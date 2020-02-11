<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscountTarget>
 * @method CartDiscountTarget current()
 * @method CartDiscountTarget at($offset)
 */
class CartDiscountTargetCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountTarget $value
     * @psalm-param CartDiscountTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountTarget
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
