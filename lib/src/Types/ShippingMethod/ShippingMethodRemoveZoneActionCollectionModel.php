<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodRemoveZoneActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodRemoveZoneActionCollection
{

    /**
     * @param ShippingMethodRemoveZoneAction $value
     * @return ShippingMethodRemoveZoneActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodRemoveZoneAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodRemoveZoneAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodRemoveZoneAction) {
            $data = $this->mapData(ShippingMethodRemoveZoneAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
