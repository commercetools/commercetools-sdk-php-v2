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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetStoresAction>
 * @method CartDiscountSetStoresAction current()
 * @method CartDiscountSetStoresAction end()
 * @method CartDiscountSetStoresAction at($offset)
 */
class CartDiscountSetStoresActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetStoresAction $value
     * @psalm-param CartDiscountSetStoresAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetStoresActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetStoresAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetStoresAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountSetStoresAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetStoresAction $data */
                $data = CartDiscountSetStoresActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
