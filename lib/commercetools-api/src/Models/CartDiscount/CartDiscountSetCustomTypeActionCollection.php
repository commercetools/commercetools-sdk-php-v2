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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetCustomTypeAction>
 * @method CartDiscountSetCustomTypeAction current()
 * @method CartDiscountSetCustomTypeAction at($offset)
 */
class CartDiscountSetCustomTypeActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetCustomTypeAction $value
     * @psalm-param CartDiscountSetCustomTypeAction|stdClass $value
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
        return function (?int $index): ?CartDiscountSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetCustomTypeAction $data */
                $data = CartDiscountSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
