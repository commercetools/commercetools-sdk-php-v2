<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodSetKeyActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodSetKeyActionCollection
{

    /**
     * @param ShippingMethodSetKeyAction $value
     * @return ShippingMethodSetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodSetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodSetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodSetKeyAction) {
            $data = $this->mapData(ShippingMethodSetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
