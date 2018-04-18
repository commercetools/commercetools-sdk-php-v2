<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class StatePagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements StatePagedQueryResponseCollection {

    /**
     * @param StatePagedQueryResponse $value
     * @return StatePagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof StatePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return StatePagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof StatePagedQueryResponse) {
            $data = $this->mapData(StatePagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
