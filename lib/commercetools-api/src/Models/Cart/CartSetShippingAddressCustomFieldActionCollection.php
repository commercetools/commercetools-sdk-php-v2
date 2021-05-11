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
 * @extends CartUpdateActionCollection<CartSetShippingAddressCustomFieldAction>
 * @method CartSetShippingAddressCustomFieldAction current()
 * @method CartSetShippingAddressCustomFieldAction at($offset)
 */
class CartSetShippingAddressCustomFieldActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingAddressCustomFieldAction $value
     * @psalm-param CartSetShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingAddressCustomFieldAction $data */
                $data = CartSetShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
