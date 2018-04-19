<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodSetDescriptionActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodSetDescriptionActionCollection
{

    /**
     * @param ShippingMethodSetDescriptionAction $value
     * @return ShippingMethodSetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodSetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodSetDescriptionAction) {
            $data = $this->mapData(ShippingMethodSetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
