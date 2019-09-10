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
 * @extends MapperSequence<CartSetCartTotalTaxAction>
 *
 * @method CartSetCartTotalTaxAction current()
 * @method CartSetCartTotalTaxAction at($offset)
 */
class CartSetCartTotalTaxActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartSetCartTotalTaxAction $value
     * @psalm-param CartSetCartTotalTaxAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartSetCartTotalTaxActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartSetCartTotalTaxAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartSetCartTotalTaxAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartSetCartTotalTaxAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartSetCartTotalTaxActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
