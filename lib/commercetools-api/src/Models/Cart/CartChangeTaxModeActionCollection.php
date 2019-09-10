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
 * @extends MapperSequence<CartChangeTaxModeAction>
 *
 * @method CartChangeTaxModeAction current()
 * @method CartChangeTaxModeAction at($offset)
 */
class CartChangeTaxModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartChangeTaxModeAction $value
     * @psalm-param CartChangeTaxModeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartChangeTaxModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartChangeTaxModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartChangeTaxModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartChangeTaxModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartChangeTaxModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
