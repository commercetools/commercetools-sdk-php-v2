<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductProjectionPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ProductProjectionPagedQueryResponseCollection {

    /**
     * @param ProductProjectionPagedQueryResponse $value
     * @return ProductProjectionPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ProductProjectionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductProjectionPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductProjectionPagedQueryResponse) {
            $data = $this->mapData(ProductProjectionPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
