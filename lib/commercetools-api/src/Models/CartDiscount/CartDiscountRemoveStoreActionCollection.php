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
 * @extends CartDiscountUpdateActionCollection<CartDiscountRemoveStoreAction>
 * @method CartDiscountRemoveStoreAction current()
 * @method CartDiscountRemoveStoreAction end()
 * @method CartDiscountRemoveStoreAction at($offset)
 */
class CartDiscountRemoveStoreActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountRemoveStoreAction $value
     * @psalm-param CartDiscountRemoveStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountRemoveStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountRemoveStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountRemoveStoreAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountRemoveStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountRemoveStoreAction $data */
                $data = CartDiscountRemoveStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
