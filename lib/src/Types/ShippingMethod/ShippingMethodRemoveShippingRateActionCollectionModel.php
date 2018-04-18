<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodRemoveShippingRateActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodRemoveShippingRateActionCollection {

    /**
     * @param ShippingMethodRemoveShippingRateAction $value
     * @return ShippingMethodRemoveShippingRateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodRemoveShippingRateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodRemoveShippingRateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodRemoveShippingRateAction) {
            $data = $this->mapData(ShippingMethodRemoveShippingRateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
