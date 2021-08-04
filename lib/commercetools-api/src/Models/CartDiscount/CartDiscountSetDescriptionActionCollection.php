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
 * @extends CartDiscountUpdateActionCollection<CartDiscountSetDescriptionAction>
 * @method CartDiscountSetDescriptionAction current()
 * @method CartDiscountSetDescriptionAction end()
 * @method CartDiscountSetDescriptionAction at($offset)
 */
class CartDiscountSetDescriptionActionCollection extends CartDiscountUpdateActionCollection
{
    /**
     * @psalm-assert CartDiscountSetDescriptionAction $value
     * @psalm-param CartDiscountSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountSetDescriptionAction $data */
                $data = CartDiscountSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
