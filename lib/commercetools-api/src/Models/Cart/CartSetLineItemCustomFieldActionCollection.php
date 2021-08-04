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
 * @extends CartUpdateActionCollection<CartSetLineItemCustomFieldAction>
 * @method CartSetLineItemCustomFieldAction current()
 * @method CartSetLineItemCustomFieldAction end()
 * @method CartSetLineItemCustomFieldAction at($offset)
 */
class CartSetLineItemCustomFieldActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemCustomFieldAction $value
     * @psalm-param CartSetLineItemCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemCustomFieldAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemCustomFieldAction $data */
                $data = CartSetLineItemCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
