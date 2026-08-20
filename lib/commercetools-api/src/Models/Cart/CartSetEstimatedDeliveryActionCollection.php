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
 * @extends CartUpdateActionCollection<CartSetEstimatedDeliveryAction>
 * @method CartSetEstimatedDeliveryAction current()
 * @method CartSetEstimatedDeliveryAction end()
 * @method CartSetEstimatedDeliveryAction at($offset)
 */
class CartSetEstimatedDeliveryActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetEstimatedDeliveryAction $value
     * @psalm-param CartSetEstimatedDeliveryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetEstimatedDeliveryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetEstimatedDeliveryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetEstimatedDeliveryAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartSetEstimatedDeliveryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetEstimatedDeliveryAction $data */
                $data = CartSetEstimatedDeliveryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
