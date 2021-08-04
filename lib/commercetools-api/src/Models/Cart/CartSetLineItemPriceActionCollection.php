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
 * @extends CartUpdateActionCollection<CartSetLineItemPriceAction>
 * @method CartSetLineItemPriceAction current()
 * @method CartSetLineItemPriceAction end()
 * @method CartSetLineItemPriceAction at($offset)
 */
class CartSetLineItemPriceActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemPriceAction $value
     * @psalm-param CartSetLineItemPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemPriceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemPriceAction $data */
                $data = CartSetLineItemPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
