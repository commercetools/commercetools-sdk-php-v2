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
 * @extends MapperSequence<CartSetShippingMethodTaxAmountAction>
 *
 * @method CartSetShippingMethodTaxAmountAction current()
 * @method CartSetShippingMethodTaxAmountAction at($offset)
 */
class CartSetShippingMethodTaxAmountActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetShippingMethodTaxAmountAction $value
     * @psalm-param CartSetShippingMethodTaxAmountAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartSetShippingMethodTaxAmountActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetShippingMethodTaxAmountAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetShippingMethodTaxAmountAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetShippingMethodTaxAmountAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetShippingMethodTaxAmountActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
