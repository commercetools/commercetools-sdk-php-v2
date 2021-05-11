<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountedLineItemPriceForQuantity>
 * @method DiscountedLineItemPriceForQuantity current()
 * @method DiscountedLineItemPriceForQuantity at($offset)
 */
class DiscountedLineItemPriceForQuantityCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedLineItemPriceForQuantity $value
     * @psalm-param DiscountedLineItemPriceForQuantity|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedLineItemPriceForQuantityCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedLineItemPriceForQuantity) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedLineItemPriceForQuantity
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountedLineItemPriceForQuantity {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountedLineItemPriceForQuantity $data */
                $data = DiscountedLineItemPriceForQuantityModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
