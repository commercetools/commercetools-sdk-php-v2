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
 * @extends MapperSequence<TaxedItemPrice>
 * @method TaxedItemPrice current()
 * @method TaxedItemPrice at($offset)
 */
class TaxedItemPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxedItemPrice $value
     * @psalm-param TaxedItemPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxedItemPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxedItemPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxedItemPrice
     */
    protected function mapper()
    {
        return function (int $index): ?TaxedItemPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxedItemPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
