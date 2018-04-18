<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductProjectionPagedSearchResponseCollectionModel extends PagedQueryResponseCollectionModel implements ProductProjectionPagedSearchResponseCollection {

    /**
     * @param ProductProjectionPagedSearchResponse $value
     * @return ProductProjectionPagedSearchResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ProductProjectionPagedSearchResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductProjectionPagedSearchResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductProjectionPagedSearchResponse) {
            $data = $this->mapData(ProductProjectionPagedSearchResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
