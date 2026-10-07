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
 * @extends CartUpdateActionCollection<CartSetRecurringPaymentStrategyAction>
 * @method CartSetRecurringPaymentStrategyAction current()
 * @method CartSetRecurringPaymentStrategyAction end()
 * @method CartSetRecurringPaymentStrategyAction at($offset)
 */
class CartSetRecurringPaymentStrategyActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetRecurringPaymentStrategyAction $value
     * @psalm-param CartSetRecurringPaymentStrategyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetRecurringPaymentStrategyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetRecurringPaymentStrategyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetRecurringPaymentStrategyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetRecurringPaymentStrategyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetRecurringPaymentStrategyAction $data */
                $data = CartSetRecurringPaymentStrategyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
