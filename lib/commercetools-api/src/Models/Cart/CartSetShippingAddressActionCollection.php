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
 * @extends MapperSequence<CartSetShippingAddressAction>
 *
 * @method CartSetShippingAddressAction current()
 * @method CartSetShippingAddressAction at($offset)
 */
class CartSetShippingAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetShippingAddressAction $value
     * @psalm-param CartSetShippingAddressAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetShippingAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
