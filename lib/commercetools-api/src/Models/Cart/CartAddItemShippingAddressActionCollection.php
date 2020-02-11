<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartAddItemShippingAddressAction>
 * @method CartAddItemShippingAddressAction current()
 * @method CartAddItemShippingAddressAction at($offset)
 */
class CartAddItemShippingAddressActionCollection extends MapperSequence
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
        return function (int $index): ?CartAddItemShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartAddItemShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
