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
 * @extends CartUpdateActionCollection<CartChangeLineItemsOrderAction>
 * @method CartChangeLineItemsOrderAction current()
 * @method CartChangeLineItemsOrderAction end()
 * @method CartChangeLineItemsOrderAction at($offset)
 */
class CartChangeLineItemsOrderActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartChangeLineItemsOrderAction $value
     * @psalm-param CartChangeLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartChangeLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartChangeLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartChangeLineItemsOrderAction $data */
                $data = CartChangeLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
