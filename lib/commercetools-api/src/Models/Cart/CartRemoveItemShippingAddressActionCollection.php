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
 * @extends CartUpdateActionCollection<CartRemoveItemShippingAddressAction>
 * @method CartRemoveItemShippingAddressAction current()
 * @method CartRemoveItemShippingAddressAction at($offset)
 */
class CartRemoveItemShippingAddressActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartRemoveItemShippingAddressAction $value
     * @psalm-param CartRemoveItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRemoveItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartRemoveItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartRemoveItemShippingAddressAction $data */
                $data = CartRemoveItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
