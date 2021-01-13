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
 * @extends MapperSequence<CartSetKeyAction>
 * @method CartSetKeyAction current()
 * @method CartSetKeyAction at($offset)
 */
class CartSetKeyActionCollection extends MapperSequence
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
                $data = CartSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
