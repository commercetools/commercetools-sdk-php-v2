<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonCollection;

class MessageSubscriptionCollectionModel extends JsonCollection implements MessageSubscriptionCollection {

    /**
     * @param MessageSubscription $value
     * @return MessageSubscriptionCollection
     */
    public function add($value) {
        if (!$value instanceof MessageSubscription) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MessageSubscription
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MessageSubscription) {
            $data = $this->mapData(MessageSubscription::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
