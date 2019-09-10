<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartDiscountChangeSortOrderAction>
 *
 * @method CartDiscountChangeSortOrderAction current()
 * @method CartDiscountChangeSortOrderAction at($offset)
 */
class CartDiscountChangeSortOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountChangeSortOrderAction $value
     * @psalm-param CartDiscountChangeSortOrderAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeSortOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeSortOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeSortOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeSortOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountChangeSortOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
