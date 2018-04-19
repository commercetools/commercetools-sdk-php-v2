<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\Common\ReferenceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodReferenceCollectionModel extends ReferenceCollectionModel implements ShippingMethodReferenceCollection
{

    /**
     * @param ShippingMethodReference $value
     * @return ShippingMethodReferenceCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodReference) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodReference
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodReference) {
            $data = $this->mapData(ShippingMethodReference::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
