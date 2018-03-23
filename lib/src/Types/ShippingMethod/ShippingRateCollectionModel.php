<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;

class ShippingRateCollectionModel extends JsonCollection implements ShippingRateCollection {

    /**
     * @param ShippingRate $value
     * @return ShippingRateCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingRate) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingRate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingRate) {
            $data = $this->mapData(ShippingRate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
