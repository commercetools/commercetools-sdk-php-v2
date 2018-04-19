<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\PagedQueryResponseCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class MessagePagedQueryResponseCollectionModel extends PagedQueryResponseCollectionModel implements MessagePagedQueryResponseCollection
{

    /**
     * @param MessagePagedQueryResponse $value
     * @return MessagePagedQueryResponseCollection
     */
    public function add($value) {
        if (!$value instanceof MessagePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MessagePagedQueryResponse
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MessagePagedQueryResponse) {
            $data = $this->mapData(MessagePagedQueryResponse::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
