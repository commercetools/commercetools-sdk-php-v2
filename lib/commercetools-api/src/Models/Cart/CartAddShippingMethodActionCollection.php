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
 * @extends CartUpdateActionCollection<CartAddShippingMethodAction>
 * @method CartAddShippingMethodAction current()
 * @method CartAddShippingMethodAction end()
 * @method CartAddShippingMethodAction at($offset)
 */
class CartAddShippingMethodActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartAddShippingMethodAction $value
     * @psalm-param CartAddShippingMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartAddShippingMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartAddShippingMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartAddShippingMethodAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartAddShippingMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartAddShippingMethodAction $data */
                $data = CartAddShippingMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
