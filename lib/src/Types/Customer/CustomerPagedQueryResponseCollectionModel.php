<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements CustomerPagedQueryResponseCollection {

    /**
     * @param CustomerPagedQueryResponse $value
     * @return CustomerPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerPagedQueryResponse) {
            $data = $this->mapData(CustomerPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
