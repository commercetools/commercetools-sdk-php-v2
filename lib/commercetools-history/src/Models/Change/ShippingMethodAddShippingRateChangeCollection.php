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
 * @extends ChangeCollection<ShippingMethodAddShippingRateChange>
 * @method ShippingMethodAddShippingRateChange current()
 * @method ShippingMethodAddShippingRateChange end()
 * @method ShippingMethodAddShippingRateChange at($offset)
 */
class ShippingMethodAddShippingRateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodAddShippingRateChange $value
     * @psalm-param ShippingMethodAddShippingRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodAddShippingRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodAddShippingRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodAddShippingRateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodAddShippingRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodAddShippingRateChange $data */
                $data = ShippingMethodAddShippingRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
