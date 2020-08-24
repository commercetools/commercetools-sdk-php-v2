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
 * @extends MapperSequence<ShippingRatePriceTier>
 * @method ShippingRatePriceTier current()
 * @method ShippingRatePriceTier at($offset)
 */
class ShippingRatePriceTierCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingRatePriceTier $value
     * @psalm-param ShippingRatePriceTier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingRatePriceTierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingRatePriceTier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingRatePriceTier
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingRatePriceTier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShippingRatePriceTierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
