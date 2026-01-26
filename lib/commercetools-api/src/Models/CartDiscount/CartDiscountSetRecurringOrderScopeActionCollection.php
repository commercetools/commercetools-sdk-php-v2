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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetRecurringOrderScopeAction>
 * @method CartDiscountSetRecurringOrderScopeAction current()
 * @method CartDiscountSetRecurringOrderScopeAction end()
 * @method CartDiscountSetRecurringOrderScopeAction at($offset)
 */
class CartDiscountSetRecurringOrderScopeActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetRecurringOrderScopeAction $value
     * @psalm-param CartDiscountSetRecurringOrderScopeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetRecurringOrderScopeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetRecurringOrderScopeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetRecurringOrderScopeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountSetRecurringOrderScopeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetRecurringOrderScopeAction $data */
                $data = CartDiscountSetRecurringOrderScopeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
