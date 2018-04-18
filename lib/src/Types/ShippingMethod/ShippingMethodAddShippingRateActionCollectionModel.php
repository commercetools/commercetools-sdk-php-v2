<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodAddShippingRateActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodAddShippingRateActionCollection {

    /**
     * @param ShippingMethodAddShippingRateAction $value
     * @return ShippingMethodAddShippingRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodAddShippingRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodAddShippingRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodAddShippingRateAction) {
            $data = $this->mapData(ShippingMethodAddShippingRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
