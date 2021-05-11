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
 * @extends CartUpdateActionCollection<CartChangeLineItemQuantityAction>
 * @method CartChangeLineItemQuantityAction current()
 * @method CartChangeLineItemQuantityAction at($offset)
 */
class CartChangeLineItemQuantityActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartChangeLineItemQuantityAction $value
     * @psalm-param CartChangeLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartChangeLineItemQuantityAction $data */
                $data = CartChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
