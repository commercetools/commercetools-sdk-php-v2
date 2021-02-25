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
 * @extends MapperSequence<CartDiscountValueFixed>
 * @method CartDiscountValueFixed current()
 * @method CartDiscountValueFixed at($offset)
 */
class CartDiscountValueFixedCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountValueFixed $value
     * @psalm-param CartDiscountValueFixed|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueFixedCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueFixed) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueFixed
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountValueFixed {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountValueFixedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
