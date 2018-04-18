<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomObjectPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements CustomObjectPagedQueryResponseCollection {

    /**
     * @param CustomObjectPagedQueryResponse $value
     * @return CustomObjectPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof CustomObjectPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomObjectPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomObjectPagedQueryResponse) {
            $data = $this->mapData(CustomObjectPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
