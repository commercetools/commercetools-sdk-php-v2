<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ResourceDeletedDeliveryCollectionModel extends SubscriptionDeliveryCollectionModel implements ResourceDeletedDeliveryCollection
{

    /**
     * @param ResourceDeletedDelivery $value
     * @return ResourceDeletedDeliveryCollection
     */
    public function add($value) {
        if (!$value instanceof ResourceDeletedDelivery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ResourceDeletedDelivery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ResourceDeletedDelivery) {
            $data = $this->mapData(ResourceDeletedDelivery::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
