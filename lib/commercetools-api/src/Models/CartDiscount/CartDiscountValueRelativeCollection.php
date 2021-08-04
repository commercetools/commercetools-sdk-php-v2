<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountValueCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountValueCollection<CartDiscountValueRelative>
 * @method CartDiscountValueRelative current()
 * @method CartDiscountValueRelative end()
 * @method CartDiscountValueRelative at($offset)
 */
class CartDiscountValueRelativeCollection extends CartDiscountValueCollection
{
    /**
     * @psalm-assert CartDiscountValueRelative $value
     * @psalm-param CartDiscountValueRelative|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountValueRelativeCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountValueRelative) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountValueRelative
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountValueRelative {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountValueRelative $data */
                $data = CartDiscountValueRelativeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
