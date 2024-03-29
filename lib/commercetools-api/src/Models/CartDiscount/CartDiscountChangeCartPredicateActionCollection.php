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
 * @extends CartDiscountUpdateActionCollection<CartDiscountChangeCartPredicateAction>
 * @method CartDiscountChangeCartPredicateAction current()
 * @method CartDiscountChangeCartPredicateAction end()
 * @method CartDiscountChangeCartPredicateAction at($offset)
 */
class CartDiscountChangeCartPredicateActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountChangeCartPredicateAction $value
     * @psalm-param CartDiscountChangeCartPredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountChangeCartPredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountChangeCartPredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountChangeCartPredicateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountChangeCartPredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountChangeCartPredicateAction $data */
                $data = CartDiscountChangeCartPredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
