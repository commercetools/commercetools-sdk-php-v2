<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductUpdateCollectionModel extends UpdateCollectionModel implements ProductUpdateCollection {

    /**
     * @param ProductUpdate $value
     * @return ProductUpdateCollection
     */
    public function add($value) {
        if (!$value instanceof ProductUpdate) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductUpdate
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductUpdate) {
            $data = $this->mapData(ProductUpdate::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
