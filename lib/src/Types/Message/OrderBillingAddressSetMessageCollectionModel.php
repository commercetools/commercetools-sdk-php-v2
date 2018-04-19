<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderBillingAddressSetMessageCollectionModel extends MessageCollectionModel implements OrderBillingAddressSetMessageCollection
{

    /**
     * @param OrderBillingAddressSetMessage $value
     * @return OrderBillingAddressSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderBillingAddressSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderBillingAddressSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderBillingAddressSetMessage) {
            $data = $this->mapData(OrderBillingAddressSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
