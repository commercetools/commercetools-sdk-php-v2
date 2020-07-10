<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountedPrice>
 * @method DiscountedPrice current()
 * @method DiscountedPrice at($offset)
 */
class DiscountedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedPrice $value
     * @psalm-param DiscountedPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedPrice
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountedPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
