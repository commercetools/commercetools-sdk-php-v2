<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements OrderPagedQueryResponseCollection
{

    /**
     * @param OrderPagedQueryResponse $value
     * @return OrderPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof OrderPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderPagedQueryResponse) {
            $data = $this->mapData(OrderPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
