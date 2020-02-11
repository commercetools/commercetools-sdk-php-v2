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
 * @extends MapperSequence<CartDiscountChangeValueAction>
 * @method CartDiscountChangeValueAction current()
 * @method CartDiscountChangeValueAction at($offset)
 */
class CartDiscountChangeValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountChangeValueAction $value
     * @psalm-param CartDiscountChangeValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountChangeValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
