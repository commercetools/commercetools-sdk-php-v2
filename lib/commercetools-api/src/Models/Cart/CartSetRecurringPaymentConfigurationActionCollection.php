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
 * @extends CartUpdateActionCollection<CartSetRecurringPaymentConfigurationAction>
 * @method CartSetRecurringPaymentConfigurationAction current()
 * @method CartSetRecurringPaymentConfigurationAction end()
 * @method CartSetRecurringPaymentConfigurationAction at($offset)
 */
class CartSetRecurringPaymentConfigurationActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetRecurringPaymentConfigurationAction $value
     * @psalm-param CartSetRecurringPaymentConfigurationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetRecurringPaymentConfigurationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetRecurringPaymentConfigurationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetRecurringPaymentConfigurationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetRecurringPaymentConfigurationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetRecurringPaymentConfigurationAction $data */
                $data = CartSetRecurringPaymentConfigurationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
