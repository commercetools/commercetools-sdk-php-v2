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
 * @extends MapperSequence<DiscountedLineItemPrice>
 * @method DiscountedLineItemPrice current()
 * @method DiscountedLineItemPrice at($offset)
 */
class DiscountedLineItemPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountedLineItemPrice $value
     * @psalm-param DiscountedLineItemPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountedLineItemPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountedLineItemPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountedLineItemPrice
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountedLineItemPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountedLineItemPrice $data */
                $data = DiscountedLineItemPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
