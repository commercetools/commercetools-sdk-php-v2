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
 * @extends CartUpdateActionCollection<CartSetLineItemSupplyChannelAction>
 * @method CartSetLineItemSupplyChannelAction current()
 * @method CartSetLineItemSupplyChannelAction end()
 * @method CartSetLineItemSupplyChannelAction at($offset)
 */
class CartSetLineItemSupplyChannelActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemSupplyChannelAction $value
     * @psalm-param CartSetLineItemSupplyChannelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemSupplyChannelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemSupplyChannelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemSupplyChannelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemSupplyChannelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemSupplyChannelAction $data */
                $data = CartSetLineItemSupplyChannelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
