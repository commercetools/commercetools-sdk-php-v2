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
 * @extends CartUpdateActionCollection<CartLockCartAction>
 * @method CartLockCartAction current()
 * @method CartLockCartAction end()
 * @method CartLockCartAction at($offset)
 */
class CartLockCartActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartLockCartAction $value
     * @psalm-param CartLockCartAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartLockCartActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartLockCartAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartLockCartAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartLockCartAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartLockCartAction $data */
                $data = CartLockCartActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
