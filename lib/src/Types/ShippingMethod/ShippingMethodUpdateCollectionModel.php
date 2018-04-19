<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodUpdateCollectionModel extends UpdateCollectionModel implements ShippingMethodUpdateCollection
{

    /**
     * @param ShippingMethodUpdate $value
     * @return ShippingMethodUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodUpdate) {
            $data = $this->mapData(ShippingMethodUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
