<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountValueCollection<CartDiscountValueFixed>
 * @method CartDiscountValueFixed current()
 * @method CartDiscountValueFixed at($offset)
 */
class CartDiscountValueFixedCollection extends CartDiscountValueCollection
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
        return function (?int $index): ?CartDiscountValueFixed {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountValueFixed $data */
                $data = CartDiscountValueFixedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
