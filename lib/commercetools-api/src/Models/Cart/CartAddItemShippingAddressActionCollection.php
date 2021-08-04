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
 * @extends CartUpdateActionCollection<CartAddItemShippingAddressAction>
 * @method CartAddItemShippingAddressAction current()
 * @method CartAddItemShippingAddressAction at($offset)
 */
class CartAddItemShippingAddressActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddItemShippingAddressAction $value
     * @psalm-param CartAddItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddItemShippingAddressAction $data */
                $data = CartAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
