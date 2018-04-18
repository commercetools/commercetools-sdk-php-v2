<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ChannelPagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements ChannelPagedQueryResponseCollection {

    /**
     * @param ChannelPagedQueryResponse $value
     * @return ChannelPagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof ChannelPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ChannelPagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ChannelPagedQueryResponse) {
            $data = $this->mapData(ChannelPagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
