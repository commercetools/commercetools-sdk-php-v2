<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductDiscountPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ProductDiscountPagedQueryResponseCollection {

    /**
     * @param ProductDiscountPagedQueryResponse $value
     * @return ProductDiscountPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscountPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscountPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscountPagedQueryResponse) {
            $data = $this->mapData(ProductDiscountPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
