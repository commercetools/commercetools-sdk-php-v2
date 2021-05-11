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
 * @extends MapperSequence<ExternalLineItemTotalPrice>
 * @method ExternalLineItemTotalPrice current()
 * @method ExternalLineItemTotalPrice at($offset)
 */
class ExternalLineItemTotalPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert ExternalLineItemTotalPrice $value
     * @psalm-param ExternalLineItemTotalPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ExternalLineItemTotalPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExternalLineItemTotalPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExternalLineItemTotalPrice
     */
    protected function mapper()
    {
        return function (int $index): ?ExternalLineItemTotalPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ExternalLineItemTotalPrice $data */
                $data = ExternalLineItemTotalPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
