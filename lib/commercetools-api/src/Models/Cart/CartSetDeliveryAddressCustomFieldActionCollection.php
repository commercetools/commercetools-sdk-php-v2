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
 * @extends CartUpdateActionCollection<CartSetDeliveryAddressCustomFieldAction>
 * @method CartSetDeliveryAddressCustomFieldAction current()
 * @method CartSetDeliveryAddressCustomFieldAction at($offset)
 */
class CartSetDeliveryAddressCustomFieldActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetDeliveryAddressCustomFieldAction $value
     * @psalm-param CartSetDeliveryAddressCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetDeliveryAddressCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetDeliveryAddressCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetDeliveryAddressCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetDeliveryAddressCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetDeliveryAddressCustomFieldAction $data */
                $data = CartSetDeliveryAddressCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
