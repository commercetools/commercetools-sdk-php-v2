<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ParcelItemsUpdatedMessageCollectionModel extends MessageCollectionModel implements ParcelItemsUpdatedMessageCollection
{

    /**
     * @param ParcelItemsUpdatedMessage $value
     * @return ParcelItemsUpdatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ParcelItemsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ParcelItemsUpdatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ParcelItemsUpdatedMessage) {
            $data = $this->mapData(ParcelItemsUpdatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
