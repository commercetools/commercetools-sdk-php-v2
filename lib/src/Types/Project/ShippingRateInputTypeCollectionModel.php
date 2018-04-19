<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ShippingRateInputTypeCollectionModel extends JsonCollection implements ShippingRateInputTypeCollection
{

    /**
     * @param ShippingRateInputType $value
     * @return ShippingRateInputTypeCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingRateInputType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingRateInputType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingRateInputType) {
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInputType::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
