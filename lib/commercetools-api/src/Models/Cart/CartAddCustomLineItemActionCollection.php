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
 * @extends CartUpdateActionCollection<CartAddCustomLineItemAction>
 * @method CartAddCustomLineItemAction current()
 * @method CartAddCustomLineItemAction at($offset)
 */
class CartAddCustomLineItemActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddCustomLineItemAction $value
     * @psalm-param CartAddCustomLineItemAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddCustomLineItemActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddCustomLineItemAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddCustomLineItemAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartAddCustomLineItemAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddCustomLineItemAction $data */
                $data = CartAddCustomLineItemActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
