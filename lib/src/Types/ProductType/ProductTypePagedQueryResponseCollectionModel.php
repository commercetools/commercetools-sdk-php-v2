<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductTypePagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ProductTypePagedQueryResponseCollection
{

    /**
     * @param ProductTypePagedQueryResponse $value
     * @return ProductTypePagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ProductTypePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductTypePagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductTypePagedQueryResponse) {
            $data = $this->mapData(ProductTypePagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
