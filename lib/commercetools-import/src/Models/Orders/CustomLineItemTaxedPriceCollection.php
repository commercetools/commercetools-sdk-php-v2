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
 * @extends MapperSequence<CustomLineItemTaxedPrice>
 * @method CustomLineItemTaxedPrice current()
 * @method CustomLineItemTaxedPrice at($offset)
 */
class CustomLineItemTaxedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItemTaxedPrice $value
     * @psalm-param CustomLineItemTaxedPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemTaxedPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemTaxedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemTaxedPrice
     */
    protected function mapper()
    {
        return function (int $index): ?CustomLineItemTaxedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemTaxedPrice $data */
                $data = CustomLineItemTaxedPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
