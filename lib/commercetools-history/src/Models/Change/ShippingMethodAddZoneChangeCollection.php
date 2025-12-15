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
 * @extends ChangeCollection<ShippingMethodAddZoneChange>
 * @method ShippingMethodAddZoneChange current()
 * @method ShippingMethodAddZoneChange end()
 * @method ShippingMethodAddZoneChange at($offset)
 */
class ShippingMethodAddZoneChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodAddZoneChange $value
     * @psalm-param ShippingMethodAddZoneChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodAddZoneChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodAddZoneChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodAddZoneChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodAddZoneChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodAddZoneChange $data */
                $data = ShippingMethodAddZoneChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
