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
 * @extends CartUpdateActionCollection<CartChangeCustomLineItemMoneyAction>
 * @method CartChangeCustomLineItemMoneyAction current()
 * @method CartChangeCustomLineItemMoneyAction at($offset)
 */
class CartChangeCustomLineItemMoneyActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartChangeCustomLineItemMoneyAction $value
     * @psalm-param CartChangeCustomLineItemMoneyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartChangeCustomLineItemMoneyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeCustomLineItemMoneyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeCustomLineItemMoneyAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartChangeCustomLineItemMoneyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartChangeCustomLineItemMoneyAction $data */
                $data = CartChangeCustomLineItemMoneyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
