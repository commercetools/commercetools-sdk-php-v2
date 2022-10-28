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
 * @extends CartUpdateActionCollection<CartRemoveShippingMethodAction>
 * @method CartRemoveShippingMethodAction current()
 * @method CartRemoveShippingMethodAction end()
 * @method CartRemoveShippingMethodAction at($offset)
 */
class CartRemoveShippingMethodActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartRemoveShippingMethodAction $value
     * @psalm-param CartRemoveShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRemoveShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveShippingMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartRemoveShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartRemoveShippingMethodAction $data */
                $data = CartRemoveShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
