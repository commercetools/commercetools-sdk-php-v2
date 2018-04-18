<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductDataCollectionModel extends JsonCollection implements ProductDataCollection {

    /**
     * @param ProductData $value
     * @return ProductDataCollection
     */
    public function add($value) {
        if (!$value instanceof ProductData) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductData
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductData) {
            $data = $this->mapData(ProductData::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
