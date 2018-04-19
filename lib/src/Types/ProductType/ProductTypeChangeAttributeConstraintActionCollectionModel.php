<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeAttributeConstraintActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeAttributeConstraintActionCollection
{

    /**
     * @param ProductTypeChangeAttributeConstraintAction $value
     * @return ProductTypeChangeAttributeConstraintActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeAttributeConstraintAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeAttributeConstraintAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeAttributeConstraintAction) {
            $data = $this->mapData(ProductTypeChangeAttributeConstraintAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
