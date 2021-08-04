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
 * @extends CartUpdateActionCollection<CartSetBillingAddressAction>
 * @method CartSetBillingAddressAction current()
 * @method CartSetBillingAddressAction end()
 * @method CartSetBillingAddressAction at($offset)
 */
class CartSetBillingAddressActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetBillingAddressAction $value
     * @psalm-param CartSetBillingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetBillingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetBillingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetBillingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetBillingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetBillingAddressAction $data */
                $data = CartSetBillingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
