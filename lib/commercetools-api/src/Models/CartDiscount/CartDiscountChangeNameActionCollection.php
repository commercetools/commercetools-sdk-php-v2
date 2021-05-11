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
 * @extends CartDiscountUpdateActionCollection<CartDiscountChangeNameAction>
 * @method CartDiscountChangeNameAction current()
 * @method CartDiscountChangeNameAction at($offset)
 */
class CartDiscountChangeNameActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountChangeNameAction $value
     * @psalm-param CartDiscountChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountChangeNameAction $data */
                $data = CartDiscountChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
