<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerGroupPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements CustomerGroupPagedQueryResponseCollection
{

    /**
     * @param CustomerGroupPagedQueryResponse $value
     * @return CustomerGroupPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerGroupPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerGroupPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerGroupPagedQueryResponse) {
            $data = $this->mapData(CustomerGroupPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
