<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ResourceCreatedDeliveryCollectionModel extends SubscriptionDeliveryCollectionModel implements ResourceCreatedDeliveryCollection {

    /**
     * @param ResourceCreatedDelivery $value
     * @return ResourceCreatedDeliveryCollection
     */
    public function add($value) {
        if (!$value instanceof ResourceCreatedDelivery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ResourceCreatedDelivery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ResourceCreatedDelivery) {
            $data = $this->mapData(ResourceCreatedDelivery::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
