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
 * @extends MapperSequence<CartSetBillingAddressCustomFieldAction>
 * @method CartSetBillingAddressCustomFieldAction current()
 * @method CartSetBillingAddressCustomFieldAction at($offset)
 */
class CartSetBillingAddressCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetBillingAddressCustomFieldAction $value
     * @psalm-param CartSetBillingAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetBillingAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetBillingAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetBillingAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetBillingAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetBillingAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
