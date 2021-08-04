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
 * @extends CartUpdateActionCollection<CartSetLineItemTotalPriceAction>
 * @method CartSetLineItemTotalPriceAction current()
 * @method CartSetLineItemTotalPriceAction end()
 * @method CartSetLineItemTotalPriceAction at($offset)
 */
class CartSetLineItemTotalPriceActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemTotalPriceAction $value
     * @psalm-param CartSetLineItemTotalPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemTotalPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemTotalPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemTotalPriceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemTotalPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemTotalPriceAction $data */
                $data = CartSetLineItemTotalPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
