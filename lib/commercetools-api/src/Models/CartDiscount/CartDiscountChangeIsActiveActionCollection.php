<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountUpdateActionCollection<CartDiscountChangeIsActiveAction>
 * @method CartDiscountChangeIsActiveAction current()
 * @method CartDiscountChangeIsActiveAction at($offset)
 */
class CartDiscountChangeIsActiveActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountChangeIsActiveAction $value
     * @psalm-param CartDiscountChangeIsActiveAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeIsActiveActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeIsActiveAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeIsActiveAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeIsActiveAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountChangeIsActiveAction $data */
                $data = CartDiscountChangeIsActiveActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
