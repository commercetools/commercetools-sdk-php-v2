<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountOnTotalPrice>
 * @method DiscountOnTotalPrice current()
 * @method DiscountOnTotalPrice end()
 * @method DiscountOnTotalPrice at($offset)
 */
class DiscountOnTotalPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountOnTotalPrice $value
     * @psalm-param DiscountOnTotalPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountOnTotalPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountOnTotalPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountOnTotalPrice
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountOnTotalPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountOnTotalPrice $data */
                $data = DiscountOnTotalPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
