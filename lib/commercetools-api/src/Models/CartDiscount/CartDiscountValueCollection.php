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
 * @extends MapperSequence<CartDiscountValue>
 *
 * @method CartDiscountValue current()
 * @method CartDiscountValue at($offset)
 */
class CartDiscountValueCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValue $value
     * @psalm-param CartDiscountValue|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValue
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
