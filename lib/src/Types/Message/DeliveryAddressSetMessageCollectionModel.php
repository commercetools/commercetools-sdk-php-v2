<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DeliveryAddressSetMessageCollectionModel extends MessageCollectionModel implements DeliveryAddressSetMessageCollection {

    /**
     * @param DeliveryAddressSetMessage $value
     * @return DeliveryAddressSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof DeliveryAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DeliveryAddressSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DeliveryAddressSetMessage) {
            $data = $this->mapData(DeliveryAddressSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
