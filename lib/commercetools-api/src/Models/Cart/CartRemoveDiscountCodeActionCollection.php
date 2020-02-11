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
 * @extends MapperSequence<CartRemoveDiscountCodeAction>
 * @method CartRemoveDiscountCodeAction current()
 * @method CartRemoveDiscountCodeAction at($offset)
 */
class CartRemoveDiscountCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartRemoveDiscountCodeAction $value
     * @psalm-param CartRemoveDiscountCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartRemoveDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartRemoveDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartRemoveDiscountCodeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartRemoveDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartRemoveDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
