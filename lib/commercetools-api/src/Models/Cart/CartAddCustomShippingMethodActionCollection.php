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
 * @extends CartUpdateActionCollection<CartAddCustomShippingMethodAction>
 * @method CartAddCustomShippingMethodAction current()
 * @method CartAddCustomShippingMethodAction end()
 * @method CartAddCustomShippingMethodAction at($offset)
 */
class CartAddCustomShippingMethodActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddCustomShippingMethodAction $value
     * @psalm-param CartAddCustomShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddCustomShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddCustomShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddCustomShippingMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartAddCustomShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddCustomShippingMethodAction $data */
                $data = CartAddCustomShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
