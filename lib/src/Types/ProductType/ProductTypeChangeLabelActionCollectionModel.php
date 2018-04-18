<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeLabelActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeLabelActionCollection {

    /**
     * @param ProductTypeChangeLabelAction $value
     * @return ProductTypeChangeLabelActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeLabelAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeLabelAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeLabelAction) {
            $data = $this->mapData(ProductTypeChangeLabelAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
