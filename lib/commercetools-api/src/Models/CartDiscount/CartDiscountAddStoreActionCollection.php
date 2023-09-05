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
 * @extends CartDiscountUpdateActionCollection<CartDiscountAddStoreAction>
 * @method CartDiscountAddStoreAction current()
 * @method CartDiscountAddStoreAction end()
 * @method CartDiscountAddStoreAction at($offset)
 */
class CartDiscountAddStoreActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountAddStoreAction $value
     * @psalm-param CartDiscountAddStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountAddStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountAddStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountAddStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountAddStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountAddStoreAction $data */
                $data = CartDiscountAddStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
