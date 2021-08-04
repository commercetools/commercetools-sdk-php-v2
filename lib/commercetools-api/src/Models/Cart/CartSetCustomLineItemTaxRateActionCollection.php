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
 * @extends CartUpdateActionCollection<CartSetCustomLineItemTaxRateAction>
 * @method CartSetCustomLineItemTaxRateAction current()
 * @method CartSetCustomLineItemTaxRateAction at($offset)
 */
class CartSetCustomLineItemTaxRateActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetCustomLineItemTaxRateAction $value
     * @psalm-param CartSetCustomLineItemTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomLineItemTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetCustomLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetCustomLineItemTaxRateAction $data */
                $data = CartSetCustomLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
