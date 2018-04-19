<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DeliveryAddedMessageCollectionModel extends MessageCollectionModel implements DeliveryAddedMessageCollection
{

    /**
     * @param DeliveryAddedMessage $value
     * @return DeliveryAddedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof DeliveryAddedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DeliveryAddedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DeliveryAddedMessage) {
            $data = $this->mapData(DeliveryAddedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
