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
 * @extends MapperSequence<CartSetItemShippingAddressCustomFieldAction>
 * @method CartSetItemShippingAddressCustomFieldAction current()
 * @method CartSetItemShippingAddressCustomFieldAction at($offset)
 */
class CartSetItemShippingAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetItemShippingAddressCustomFieldAction $value
     * @psalm-param CartSetItemShippingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetItemShippingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetItemShippingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetItemShippingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetItemShippingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetItemShippingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
