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
 * @extends CartUpdateActionCollection<CartSetLineItemTaxRateAction>
 * @method CartSetLineItemTaxRateAction current()
 * @method CartSetLineItemTaxRateAction end()
 * @method CartSetLineItemTaxRateAction at($offset)
 */
class CartSetLineItemTaxRateActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetLineItemTaxRateAction $value
     * @psalm-param CartSetLineItemTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetLineItemTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetLineItemTaxRateAction $data */
                $data = CartSetLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
