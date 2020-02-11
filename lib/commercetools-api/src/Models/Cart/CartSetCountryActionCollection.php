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
 * @extends MapperSequence<CartSetCountryAction>
 * @method CartSetCountryAction current()
 * @method CartSetCountryAction at($offset)
 */
class CartSetCountryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCountryAction $value
     * @psalm-param CartSetCountryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartSetCountryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCountryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCountryAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetCountryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCountryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
