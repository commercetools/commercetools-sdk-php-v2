<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DeliveryRemovedMessageCollectionModel extends MessageCollectionModel implements DeliveryRemovedMessageCollection
{

    /**
     * @param DeliveryRemovedMessage $value
     * @return DeliveryRemovedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof DeliveryRemovedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DeliveryRemovedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DeliveryRemovedMessage) {
            $data = $this->mapData(DeliveryRemovedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
