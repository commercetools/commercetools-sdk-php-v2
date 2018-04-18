<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductCatalogDataCollectionModel extends JsonCollection implements ProductCatalogDataCollection {

    /**
     * @param ProductCatalogData $value
     * @return ProductCatalogDataCollection
     */
    public function add($value) {
        if (!$value instanceof ProductCatalogData) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductCatalogData
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductCatalogData) {
            $data = $this->mapData(ProductCatalogData::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
