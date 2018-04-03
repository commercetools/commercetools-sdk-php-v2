<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingRatePriceTierCollectionModel extends JsonCollection implements ShippingRatePriceTierCollection {

    /**
     * @param ShippingRatePriceTier $value
     * @return ShippingRatePriceTierCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingRatePriceTier) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingRatePriceTier
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingRatePriceTier) {
            $resolvedClass = $this->resolveDiscriminator(ShippingRatePriceTier::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
