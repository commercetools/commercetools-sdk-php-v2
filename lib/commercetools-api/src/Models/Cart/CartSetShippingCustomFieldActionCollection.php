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
 * @extends CartUpdateActionCollection<CartSetShippingCustomFieldAction>
 * @method CartSetShippingCustomFieldAction current()
 * @method CartSetShippingCustomFieldAction end()
 * @method CartSetShippingCustomFieldAction at($offset)
 */
class CartSetShippingCustomFieldActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingCustomFieldAction $value
     * @psalm-param CartSetShippingCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetShippingCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingCustomFieldAction $data */
                $data = CartSetShippingCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
