<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodChangeIsDefaultActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodChangeIsDefaultActionCollection
{

    /**
     * @param ShippingMethodChangeIsDefaultAction $value
     * @return ShippingMethodChangeIsDefaultActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodChangeIsDefaultAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodChangeIsDefaultAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodChangeIsDefaultAction) {
            $data = $this->mapData(ShippingMethodChangeIsDefaultAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
