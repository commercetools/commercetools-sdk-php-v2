<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\CartDiscount\CartDiscountTargetCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CartDiscountTargetCollection<CartDiscountTotalPriceTarget>
 * @method CartDiscountTotalPriceTarget current()
 * @method CartDiscountTotalPriceTarget end()
 * @method CartDiscountTotalPriceTarget at($offset)
 */
class CartDiscountTotalPriceTargetCollection extends CartDiscountTargetCollection
{
    /**
     * @psalm-assert CartDiscountTotalPriceTarget $value
     * @psalm-param CartDiscountTotalPriceTarget|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartDiscountTotalPriceTargetCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartDiscountTotalPriceTarget) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartDiscountTotalPriceTarget
     */
    protected function mapper()
    {
        return function (?int $index): ?CartDiscountTotalPriceTarget {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartDiscountTotalPriceTarget $data */
                $data = CartDiscountTotalPriceTargetModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
