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
 * @extends CartUpdateActionCollection<CartUpdateItemShippingAddressAction>
 * @method CartUpdateItemShippingAddressAction current()
 * @method CartUpdateItemShippingAddressAction at($offset)
 */
class CartUpdateItemShippingAddressActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartUpdateItemShippingAddressAction $value
     * @psalm-param CartUpdateItemShippingAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUpdateItemShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUpdateItemShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUpdateItemShippingAddressAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUpdateItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUpdateItemShippingAddressAction $data */
                $data = CartUpdateItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
