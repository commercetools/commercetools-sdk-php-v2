<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypeUpdateCollectionModel extends UpdateCollectionModel implements ProductTypeUpdateCollection
{

    /**
     * @param ProductTypeUpdate $value
     * @return ProductTypeUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypeUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypeUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypeUpdate) {
            $data = $this->mapData(ProductTypeUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
