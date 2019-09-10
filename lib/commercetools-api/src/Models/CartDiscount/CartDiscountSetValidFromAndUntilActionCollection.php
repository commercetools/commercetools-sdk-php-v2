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
 * @extends MapperSequence<CartDiscountSetValidFromAndUntilAction>
 *
 * @method CartDiscountSetValidFromAndUntilAction current()
 * @method CartDiscountSetValidFromAndUntilAction at($offset)
 */
class CartDiscountSetValidFromAndUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetValidFromAndUntilAction $value
     * @psalm-param CartDiscountSetValidFromAndUntilAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetValidFromAndUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetValidFromAndUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetValidFromAndUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountSetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
