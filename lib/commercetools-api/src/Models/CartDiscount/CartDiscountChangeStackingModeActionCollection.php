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
 * @extends MapperSequence<CartDiscountChangeStackingModeAction>
 * @method CartDiscountChangeStackingModeAction current()
 * @method CartDiscountChangeStackingModeAction at($offset)
 */
class CartDiscountChangeStackingModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountChangeStackingModeAction $value
     * @psalm-param CartDiscountChangeStackingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeStackingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeStackingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeStackingModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeStackingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountChangeStackingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
