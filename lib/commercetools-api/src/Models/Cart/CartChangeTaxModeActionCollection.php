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
 * @extends CartUpdateActionCollection<CartChangeTaxModeAction>
 * @method CartChangeTaxModeAction current()
 * @method CartChangeTaxModeAction at($offset)
 */
class CartChangeTaxModeActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartChangeTaxModeAction $value
     * @psalm-param CartChangeTaxModeAction|stdClass $value
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
                /** @var CartChangeTaxModeAction $data */
                $data = CartChangeTaxModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
