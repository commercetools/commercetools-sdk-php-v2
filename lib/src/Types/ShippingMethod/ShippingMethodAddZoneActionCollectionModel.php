<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodAddZoneActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodAddZoneActionCollection
{

    /**
     * @param ShippingMethodAddZoneAction $value
     * @return ShippingMethodAddZoneActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodAddZoneAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodAddZoneAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodAddZoneAction) {
            $data = $this->mapData(ShippingMethodAddZoneAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
