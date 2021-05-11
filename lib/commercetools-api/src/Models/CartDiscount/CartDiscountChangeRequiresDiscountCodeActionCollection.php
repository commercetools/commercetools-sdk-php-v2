<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountUpdateActionCollection<CartDiscountChangeRequiresDiscountCodeAction>
 * @method CartDiscountChangeRequiresDiscountCodeAction current()
 * @method CartDiscountChangeRequiresDiscountCodeAction at($offset)
 */
class CartDiscountChangeRequiresDiscountCodeActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountChangeRequiresDiscountCodeAction $value
     * @psalm-param CartDiscountChangeRequiresDiscountCodeAction|stdClass $value
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
                /** @var CartDiscountChangeRequiresDiscountCodeAction $data */
                $data = CartDiscountChangeRequiresDiscountCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
