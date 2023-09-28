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
 * @extends MapperSequence<DiscountedTotalPricePortion>
 * @method DiscountedTotalPricePortion current()
 * @method DiscountedTotalPricePortion end()
 * @method DiscountedTotalPricePortion at($offset)
 */
class DiscountedTotalPricePortionCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedTotalPricePortion $value
     * @psalm-param DiscountedTotalPricePortion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedTotalPricePortionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedTotalPricePortion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedTotalPricePortion
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountedTotalPricePortion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountedTotalPricePortion $data */
                $data = DiscountedTotalPricePortionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
