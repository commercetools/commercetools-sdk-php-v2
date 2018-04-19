<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ProductPagedQueryResponseCollection
{

    /**
     * @param ProductPagedQueryResponse $value
     * @return ProductPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ProductPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductPagedQueryResponse) {
            $data = $this->mapData(ProductPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
