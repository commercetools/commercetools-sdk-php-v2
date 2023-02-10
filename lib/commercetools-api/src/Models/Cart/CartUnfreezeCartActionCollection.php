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
 * @extends CartUpdateActionCollection<CartUnfreezeCartAction>
 * @method CartUnfreezeCartAction current()
 * @method CartUnfreezeCartAction end()
 * @method CartUnfreezeCartAction at($offset)
 */
class CartUnfreezeCartActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartUnfreezeCartAction $value
     * @psalm-param CartUnfreezeCartAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartUnfreezeCartActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartUnfreezeCartAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartUnfreezeCartAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartUnfreezeCartAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartUnfreezeCartAction $data */
                $data = CartUnfreezeCartActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
