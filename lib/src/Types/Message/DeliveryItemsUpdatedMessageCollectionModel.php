<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DeliveryItemsUpdatedMessageCollectionModel extends MessageCollectionModel implements DeliveryItemsUpdatedMessageCollection {

    /**
     * @param DeliveryItemsUpdatedMessage $value
     * @return DeliveryItemsUpdatedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof DeliveryItemsUpdatedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DeliveryItemsUpdatedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DeliveryItemsUpdatedMessage) {
            $data = $this->mapData(DeliveryItemsUpdatedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
