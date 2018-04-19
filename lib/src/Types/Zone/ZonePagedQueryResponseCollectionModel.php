<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ZonePagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ZonePagedQueryResponseCollection
{

    /**
     * @param ZonePagedQueryResponse $value
     * @return ZonePagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ZonePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ZonePagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ZonePagedQueryResponse) {
            $data = $this->mapData(ZonePagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
