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
 * @extends MapperSequence<CartSetDeliveryAddressCustomTypeAction>
 * @method CartSetDeliveryAddressCustomTypeAction current()
 * @method CartSetDeliveryAddressCustomTypeAction at($offset)
 */
class CartSetDeliveryAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetDeliveryAddressCustomTypeAction $value
     * @psalm-param CartSetDeliveryAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetDeliveryAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetDeliveryAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetDeliveryAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetDeliveryAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetDeliveryAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
