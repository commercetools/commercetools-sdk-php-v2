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
 * @extends CartUpdateActionCollection<CartRemoveRecurringPaymentAllocationAction>
 * @method CartRemoveRecurringPaymentAllocationAction current()
 * @method CartRemoveRecurringPaymentAllocationAction end()
 * @method CartRemoveRecurringPaymentAllocationAction at($offset)
 */
class CartRemoveRecurringPaymentAllocationActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartRemoveRecurringPaymentAllocationAction $value
     * @psalm-param CartRemoveRecurringPaymentAllocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRemoveRecurringPaymentAllocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveRecurringPaymentAllocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveRecurringPaymentAllocationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartRemoveRecurringPaymentAllocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartRemoveRecurringPaymentAllocationAction $data */
                $data = CartRemoveRecurringPaymentAllocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
