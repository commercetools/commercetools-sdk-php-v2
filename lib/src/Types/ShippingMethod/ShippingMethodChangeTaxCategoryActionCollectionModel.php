<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\ShippingMethod\ShippingMethodUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ShippingMethodChangeTaxCategoryActionCollectionModel extends ShippingMethodUpdateActionCollectionModel implements ShippingMethodChangeTaxCategoryActionCollection {

    /**
     * @param ShippingMethodChangeTaxCategoryAction $value
     * @return ShippingMethodChangeTaxCategoryActionCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethodChangeTaxCategoryAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethodChangeTaxCategoryAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethodChangeTaxCategoryAction) {
            $data = $this->mapData(ShippingMethodChangeTaxCategoryAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
