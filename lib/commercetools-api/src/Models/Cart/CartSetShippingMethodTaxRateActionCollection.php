<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartSetShippingMethodTaxRateAction>
 *
 * @method CartSetShippingMethodTaxRateAction current()
 * @method CartSetShippingMethodTaxRateAction at($offset)
 */
class CartSetShippingMethodTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetShippingMethodTaxRateAction $value
     * @psalm-param CartSetShippingMethodTaxRateAction|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = CartSetShippingMethodTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
