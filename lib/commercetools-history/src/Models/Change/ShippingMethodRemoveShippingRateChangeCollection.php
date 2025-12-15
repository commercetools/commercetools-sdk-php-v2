<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ShippingMethodRemoveShippingRateChange>
 * @method ShippingMethodRemoveShippingRateChange current()
 * @method ShippingMethodRemoveShippingRateChange end()
 * @method ShippingMethodRemoveShippingRateChange at($offset)
 */
class ShippingMethodRemoveShippingRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodRemoveShippingRateChange $value
     * @psalm-param ShippingMethodRemoveShippingRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodRemoveShippingRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodRemoveShippingRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodRemoveShippingRateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodRemoveShippingRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodRemoveShippingRateChange $data */
                $data = ShippingMethodRemoveShippingRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
