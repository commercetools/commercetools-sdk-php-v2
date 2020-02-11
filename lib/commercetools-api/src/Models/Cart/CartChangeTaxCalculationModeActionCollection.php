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
 * @extends MapperSequence<CartChangeTaxCalculationModeAction>
 * @method CartChangeTaxCalculationModeAction current()
 * @method CartChangeTaxCalculationModeAction at($offset)
 */
class CartChangeTaxCalculationModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartChangeTaxCalculationModeAction $value
     * @psalm-param CartChangeTaxCalculationModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartChangeTaxCalculationModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeTaxCalculationModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeTaxCalculationModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartChangeTaxCalculationModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartChangeTaxCalculationModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
