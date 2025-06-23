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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetDiscountGroupAction>
 * @method CartDiscountSetDiscountGroupAction current()
 * @method CartDiscountSetDiscountGroupAction end()
 * @method CartDiscountSetDiscountGroupAction at($offset)
 */
class CartDiscountSetDiscountGroupActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetDiscountGroupAction $value
     * @psalm-param CartDiscountSetDiscountGroupAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetDiscountGroupActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetDiscountGroupAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetDiscountGroupAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountSetDiscountGroupAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetDiscountGroupAction $data */
                $data = CartDiscountSetDiscountGroupActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
