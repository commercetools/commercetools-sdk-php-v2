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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetValidFromAndUntilAction>
 * @method CartDiscountSetValidFromAndUntilAction current()
 * @method CartDiscountSetValidFromAndUntilAction at($offset)
 */
class CartDiscountSetValidFromAndUntilActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetValidFromAndUntilAction $value
     * @psalm-param CartDiscountSetValidFromAndUntilAction|stdClass $value
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
        return function (?int $index): ?CartDiscountSetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetValidFromAndUntilAction $data */
                $data = CartDiscountSetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
