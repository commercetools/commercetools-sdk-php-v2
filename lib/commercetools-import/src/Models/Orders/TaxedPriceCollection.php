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
 * @extends MapperSequence<TaxedPrice>
 * @method TaxedPrice current()
 * @method TaxedPrice end()
 * @method TaxedPrice at($offset)
 */
class TaxedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxedPrice $value
     * @psalm-param TaxedPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxedPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxedPrice
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxedPrice $data */
                $data = TaxedPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
