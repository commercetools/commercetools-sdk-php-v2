<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomerCreatedMessageCollectionModel extends MessageCollectionModel implements CustomerCreatedMessageCollection
{

    /**
     * @param CustomerCreatedMessage $value
     * @return CustomerCreatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomerCreatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomerCreatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomerCreatedMessage) {
            $data = $this->mapData(CustomerCreatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
