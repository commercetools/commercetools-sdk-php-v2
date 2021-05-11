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
 * @extends CartUpdateActionCollection<CartSetKeyAction>
 * @method CartSetKeyAction current()
 * @method CartSetKeyAction at($offset)
 */
class CartSetKeyActionCollection extends CartUpdateActionCollection
{
    /**
     * @psalm-assert CartSetKeyAction $value
     * @psalm-param CartSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartSetKeyAction $data */
                $data = CartSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
