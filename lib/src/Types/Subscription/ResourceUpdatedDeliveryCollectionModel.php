<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ResourceUpdatedDeliveryCollectionModel extends SubscriptionDeliveryCollectionModel implements ResourceUpdatedDeliveryCollection {

    /**
     * @param ResourceUpdatedDelivery $value
     * @return ResourceUpdatedDeliveryCollection
     */
    public function add($value) {
        if (!$value instanceof ResourceUpdatedDelivery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ResourceUpdatedDelivery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ResourceUpdatedDelivery) {
            $data = $this->mapData(ResourceUpdatedDelivery::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
