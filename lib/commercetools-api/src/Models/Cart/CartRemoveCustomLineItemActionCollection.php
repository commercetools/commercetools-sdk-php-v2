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
 * @extends CartUpdateActionCollection<CartRemoveCustomLineItemAction>
 * @method CartRemoveCustomLineItemAction current()
 * @method CartRemoveCustomLineItemAction at($offset)
 */
class CartRemoveCustomLineItemActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartRemoveCustomLineItemAction $value
     * @psalm-param CartRemoveCustomLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRemoveCustomLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveCustomLineItemAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartRemoveCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartRemoveCustomLineItemAction $data */
                $data = CartRemoveCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
