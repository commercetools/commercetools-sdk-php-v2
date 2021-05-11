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
 * @extends CartUpdateActionCollection<CartSetShippingMethodTaxRateAction>
 * @method CartSetShippingMethodTaxRateAction current()
 * @method CartSetShippingMethodTaxRateAction at($offset)
 */
class CartSetShippingMethodTaxRateActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetShippingMethodTaxRateAction $value
     * @psalm-param CartSetShippingMethodTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingMethodTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingMethodTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingMethodTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingMethodTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetShippingMethodTaxRateAction $data */
                $data = CartSetShippingMethodTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
