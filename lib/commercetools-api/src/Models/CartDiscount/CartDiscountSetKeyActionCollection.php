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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetKeyAction>
 * @method CartDiscountSetKeyAction current()
 * @method CartDiscountSetKeyAction end()
 * @method CartDiscountSetKeyAction at($offset)
 */
class CartDiscountSetKeyActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetKeyAction $value
     * @psalm-param CartDiscountSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetKeyAction $data */
                $data = CartDiscountSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
