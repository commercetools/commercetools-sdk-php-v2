<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\CartUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartUpdateActionCollection<CartAddRecurringPaymentAllocationAction>
 * @method CartAddRecurringPaymentAllocationAction current()
 * @method CartAddRecurringPaymentAllocationAction end()
 * @method CartAddRecurringPaymentAllocationAction at($offset)
 */
class CartAddRecurringPaymentAllocationActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddRecurringPaymentAllocationAction $value
     * @psalm-param CartAddRecurringPaymentAllocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddRecurringPaymentAllocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddRecurringPaymentAllocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddRecurringPaymentAllocationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartAddRecurringPaymentAllocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddRecurringPaymentAllocationAction $data */
                $data = CartAddRecurringPaymentAllocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
