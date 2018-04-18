<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodePagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements DiscountCodePagedQueryResponseCollection {

    /**
     * @param DiscountCodePagedQueryResponse $value
     * @return DiscountCodePagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodePagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodePagedQueryResponse) {
            $data = $this->mapData(DiscountCodePagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
