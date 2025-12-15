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
 * @extends ChangeCollection<ShippingMethodRemoveZoneChange>
 * @method ShippingMethodRemoveZoneChange current()
 * @method ShippingMethodRemoveZoneChange end()
 * @method ShippingMethodRemoveZoneChange at($offset)
 */
class ShippingMethodRemoveZoneChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ShippingMethodRemoveZoneChange $value
     * @psalm-param ShippingMethodRemoveZoneChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShippingMethodRemoveZoneChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShippingMethodRemoveZoneChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShippingMethodRemoveZoneChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ShippingMethodRemoveZoneChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShippingMethodRemoveZoneChange $data */
                $data = ShippingMethodRemoveZoneChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
