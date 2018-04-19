<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements CartPagedQueryResponseCollection
{

    /**
     * @param CartPagedQueryResponse $value
     * @return CartPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof CartPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartPagedQueryResponse) {
            $data = $this->mapData(CartPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
