<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeChangeAttributeOrderActionCollectionModel extends ProductTypeUpdateActionCollectionModel implements ProductTypeChangeAttributeOrderActionCollection
{

    /**
     * @param ProductTypeChangeAttributeOrderAction $value
     * @return ProductTypeChangeAttributeOrderActionCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeChangeAttributeOrderAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeChangeAttributeOrderAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeChangeAttributeOrderAction) {
            $data = $this->mapData(ProductTypeChangeAttributeOrderAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
