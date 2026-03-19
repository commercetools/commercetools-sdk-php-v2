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
 * @extends CartUpdateActionCollection<CartUnlockCartAction>
 * @method CartUnlockCartAction current()
 * @method CartUnlockCartAction end()
 * @method CartUnlockCartAction at($offset)
 */
class CartUnlockCartActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartUnlockCartAction $value
     * @psalm-param CartUnlockCartAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUnlockCartActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUnlockCartAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUnlockCartAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUnlockCartAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUnlockCartAction $data */
                $data = CartUnlockCartActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
