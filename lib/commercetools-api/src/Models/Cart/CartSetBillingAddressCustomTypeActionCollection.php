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
 * @extends CartUpdateActionCollection<CartSetBillingAddressCustomTypeAction>
 * @method CartSetBillingAddressCustomTypeAction current()
 * @method CartSetBillingAddressCustomTypeAction end()
 * @method CartSetBillingAddressCustomTypeAction at($offset)
 */
class CartSetBillingAddressCustomTypeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetBillingAddressCustomTypeAction $value
     * @psalm-param CartSetBillingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetBillingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetBillingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetBillingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetBillingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetBillingAddressCustomTypeAction $data */
                $data = CartSetBillingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
