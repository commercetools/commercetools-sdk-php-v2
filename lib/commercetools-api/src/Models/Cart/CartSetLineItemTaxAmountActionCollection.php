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
 * @extends CartUpdateActionCollection<CartSetLineItemTaxAmountAction>
 * @method CartSetLineItemTaxAmountAction current()
 * @method CartSetLineItemTaxAmountAction end()
 * @method CartSetLineItemTaxAmountAction at($offset)
 */
class CartSetLineItemTaxAmountActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemTaxAmountAction $value
     * @psalm-param CartSetLineItemTaxAmountAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemTaxAmountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemTaxAmountAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemTaxAmountAction $data */
                $data = CartSetLineItemTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
