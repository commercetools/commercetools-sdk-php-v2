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
 * @extends MapperSequence<CartDiscountChangeRequiresDiscountCodeAction>
 *
 * @method CartDiscountChangeRequiresDiscountCodeAction current()
 * @method CartDiscountChangeRequiresDiscountCodeAction at($offset)
 */
class CartDiscountChangeRequiresDiscountCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CartDiscountChangeRequiresDiscountCodeAction $value
     * @psalm-param CartDiscountChangeRequiresDiscountCodeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeRequiresDiscountCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeRequiresDiscountCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeRequiresDiscountCodeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CartDiscountChangeRequiresDiscountCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartDiscountChangeRequiresDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
