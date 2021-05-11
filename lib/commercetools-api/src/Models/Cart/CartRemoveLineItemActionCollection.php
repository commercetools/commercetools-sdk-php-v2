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
 * @extends CartUpdateActionCollection<CartRemoveLineItemAction>
 * @method CartRemoveLineItemAction current()
 * @method CartRemoveLineItemAction at($offset)
 */
class CartRemoveLineItemActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartRemoveLineItemAction $value
     * @psalm-param CartRemoveLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRemoveLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartRemoveLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartRemoveLineItemAction $data */
                $data = CartRemoveLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
