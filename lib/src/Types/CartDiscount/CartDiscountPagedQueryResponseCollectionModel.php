<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartDiscountPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements CartDiscountPagedQueryResponseCollection
{

    /**
     * @param CartDiscountPagedQueryResponse $value
     * @return CartDiscountPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof CartDiscountPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartDiscountPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartDiscountPagedQueryResponse) {
            $data = $this->mapData(CartDiscountPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
