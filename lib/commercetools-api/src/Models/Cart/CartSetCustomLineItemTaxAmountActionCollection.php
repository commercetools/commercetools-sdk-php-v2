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
 * @extends CartUpdateActionCollection<CartSetCustomLineItemTaxAmountAction>
 * @method CartSetCustomLineItemTaxAmountAction current()
 * @method CartSetCustomLineItemTaxAmountAction at($offset)
 */
class CartSetCustomLineItemTaxAmountActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetCustomLineItemTaxAmountAction $value
     * @psalm-param CartSetCustomLineItemTaxAmountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomLineItemTaxAmountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomLineItemTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomLineItemTaxAmountAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetCustomLineItemTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetCustomLineItemTaxAmountAction $data */
                $data = CartSetCustomLineItemTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
