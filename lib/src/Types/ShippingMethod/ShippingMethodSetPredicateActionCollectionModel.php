<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodSetPredicateActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodSetPredicateActionCollection {

    /**
     * @param ShippingMethodSetPredicateAction $value
     * @return ShippingMethodSetPredicateActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodSetPredicateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodSetPredicateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodSetPredicateAction) {
            $data = $this->mapData(ShippingMethodSetPredicateAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
