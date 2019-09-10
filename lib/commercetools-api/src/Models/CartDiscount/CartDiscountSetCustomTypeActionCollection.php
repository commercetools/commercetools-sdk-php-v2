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
 * @extends MapperSequence<CartDiscountSetCustomTypeAction>
 *
 * @method CartDiscountSetCustomTypeAction current()
 * @method CartDiscountSetCustomTypeAction at($offset)
 */
class CartDiscountSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetCustomTypeAction $value
     * @psalm-param CartDiscountSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
