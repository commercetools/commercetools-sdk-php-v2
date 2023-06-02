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
 * @extends CartUpdateActionCollection<CartSetLineItemInventoryModeAction>
 * @method CartSetLineItemInventoryModeAction current()
 * @method CartSetLineItemInventoryModeAction end()
 * @method CartSetLineItemInventoryModeAction at($offset)
 */
class CartSetLineItemInventoryModeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemInventoryModeAction $value
     * @psalm-param CartSetLineItemInventoryModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemInventoryModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemInventoryModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemInventoryModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemInventoryModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemInventoryModeAction $data */
                $data = CartSetLineItemInventoryModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
