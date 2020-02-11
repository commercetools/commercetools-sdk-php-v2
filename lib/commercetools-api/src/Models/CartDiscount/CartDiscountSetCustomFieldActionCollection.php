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
 * @extends MapperSequence<CartDiscountSetCustomFieldAction>
 * @method CartDiscountSetCustomFieldAction current()
 * @method CartDiscountSetCustomFieldAction at($offset)
 */
class CartDiscountSetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountSetCustomFieldAction $value
     * @psalm-param CartDiscountSetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountSetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountSetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
