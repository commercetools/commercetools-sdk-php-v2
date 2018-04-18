<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class MessageDeliveryCollectionModel extends SubscriptionDeliveryCollectionModel implements MessageDeliveryCollection {

    /**
     * @param MessageDelivery $value
     * @return MessageDeliveryCollection
     */
    public function add($value) {
        if (!$value instanceof MessageDelivery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MessageDelivery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MessageDelivery) {
            $data = $this->mapData(MessageDelivery::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
