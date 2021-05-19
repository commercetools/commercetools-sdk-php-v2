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
 * @extends MapperSequence<ShippingRate>
 * @method ShippingRate current()
 * @method ShippingRate at($offset)
 */
class ShippingRateCollection extends MapperSequence
{
    /**
     * @psalm-assert ShippingRate $value
     * @psalm-param ShippingRate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingRateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingRate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingRate
     */
    protected function mapper()
    {
        return function (int $index): ?ShippingRate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingRate $data */
                $data = ShippingRateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
