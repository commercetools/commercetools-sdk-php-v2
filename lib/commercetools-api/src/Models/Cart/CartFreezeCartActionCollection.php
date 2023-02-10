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
 * @extends CartUpdateActionCollection<CartFreezeCartAction>
 * @method CartFreezeCartAction current()
 * @method CartFreezeCartAction end()
 * @method CartFreezeCartAction at($offset)
 */
class CartFreezeCartActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartFreezeCartAction $value
     * @psalm-param CartFreezeCartAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartFreezeCartActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartFreezeCartAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartFreezeCartAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartFreezeCartAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartFreezeCartAction $data */
                $data = CartFreezeCartActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
