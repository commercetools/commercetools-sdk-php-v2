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
 * @extends CartDiscountUpdateActionCollection<CartDiscountChangeStackingModeAction>
 * @method CartDiscountChangeStackingModeAction current()
 * @method CartDiscountChangeStackingModeAction end()
 * @method CartDiscountChangeStackingModeAction at($offset)
 */
class CartDiscountChangeStackingModeActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountChangeStackingModeAction $value
     * @psalm-param CartDiscountChangeStackingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeStackingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeStackingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeStackingModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountChangeStackingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountChangeStackingModeAction $data */
                $data = CartDiscountChangeStackingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
