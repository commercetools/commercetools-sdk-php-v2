<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingRateInputCollectionModel extends JsonCollection implements ShippingRateInputCollection {

    /**
     * @param ShippingRateInput $value
     * @return ShippingRateInputCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingRateInput) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingRateInput
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingRateInput) {
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInput::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
