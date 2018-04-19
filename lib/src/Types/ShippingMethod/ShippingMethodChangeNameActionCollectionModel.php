<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodChangeNameActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodChangeNameActionCollection
{

    /**
     * @param ShippingMethodChangeNameAction $value
     * @return ShippingMethodChangeNameActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodChangeNameAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodChangeNameAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodChangeNameAction) {
            $data = $this->mapData(ShippingMethodChangeNameAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
