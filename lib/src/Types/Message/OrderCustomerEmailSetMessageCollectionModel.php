<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class OrderCustomerEmailSetMessageCollectionModel extends MessageCollectionModel implements OrderCustomerEmailSetMessageCollection
{

    /**
     * @param OrderCustomerEmailSetMessage $value
     * @return OrderCustomerEmailSetMessageCollection
     */
    public function add($value) {
        if (!$value instanceof OrderCustomerEmailSetMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return OrderCustomerEmailSetMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof OrderCustomerEmailSetMessage) {
            $data = $this->mapData(OrderCustomerEmailSetMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
