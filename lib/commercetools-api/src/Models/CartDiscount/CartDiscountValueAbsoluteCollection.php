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
 * @extends MapperSequence<CartDiscountValueAbsolute>
 * @method CartDiscountValueAbsolute current()
 * @method CartDiscountValueAbsolute at($offset)
 */
class CartDiscountValueAbsoluteCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValueAbsolute $value
     * @psalm-param CartDiscountValueAbsolute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueAbsoluteCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueAbsolute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueAbsolute
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountValueAbsolute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueAbsoluteModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
