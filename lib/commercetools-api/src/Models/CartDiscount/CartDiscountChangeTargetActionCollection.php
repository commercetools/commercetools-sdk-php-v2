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
 * @extends CartDiscountUpdateActionCollection<CartDiscountChangeTargetAction>
 * @method CartDiscountChangeTargetAction current()
 * @method CartDiscountChangeTargetAction at($offset)
 */
class CartDiscountChangeTargetActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountChangeTargetAction $value
     * @psalm-param CartDiscountChangeTargetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeTargetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeTargetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeTargetAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountChangeTargetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountChangeTargetAction $data */
                $data = CartDiscountChangeTargetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
