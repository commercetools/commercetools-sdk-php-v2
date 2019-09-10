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
 * @extends MapperSequence<CartDiscountChangeNameAction>
 *
 * @method CartDiscountChangeNameAction current()
 * @method CartDiscountChangeNameAction at($offset)
 */
class CartDiscountChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountChangeNameAction $value
     * @psalm-param CartDiscountChangeNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
