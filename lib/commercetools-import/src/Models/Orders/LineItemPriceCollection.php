<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LineItemPrice>
 * @method LineItemPrice current()
 * @method LineItemPrice at($offset)
 */
class LineItemPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemPrice $value
     * @psalm-param LineItemPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemPrice
     */
    protected function mapper()
    {
        return function (int $index): ?LineItemPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LineItemPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
