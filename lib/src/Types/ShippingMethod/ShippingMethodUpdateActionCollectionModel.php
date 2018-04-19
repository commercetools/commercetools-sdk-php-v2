<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodUpdateActionCollectionModel extends UpdateActionCollectionModel implements ShippingMethodUpdateActionCollection
{

    /**
     * @param ShippingMethodUpdateAction $value
     * @return ShippingMethodUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(ShippingMethodUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
