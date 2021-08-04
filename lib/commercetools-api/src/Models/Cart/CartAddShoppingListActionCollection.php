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
 * @extends CartUpdateActionCollection<CartAddShoppingListAction>
 * @method CartAddShoppingListAction current()
 * @method CartAddShoppingListAction end()
 * @method CartAddShoppingListAction at($offset)
 */
class CartAddShoppingListActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddShoppingListAction $value
     * @psalm-param CartAddShoppingListAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddShoppingListActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddShoppingListAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddShoppingListAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartAddShoppingListAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddShoppingListAction $data */
                $data = CartAddShoppingListActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
