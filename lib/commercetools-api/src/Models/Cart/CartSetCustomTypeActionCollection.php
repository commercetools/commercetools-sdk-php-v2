<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartSetCustomTypeAction>
 *
 * @method CartSetCustomTypeAction current()
 * @method CartSetCustomTypeAction at($offset)
 */
class CartSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCustomTypeAction $value
     * @psalm-param CartSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
