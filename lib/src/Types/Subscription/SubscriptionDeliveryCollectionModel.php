<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SubscriptionDeliveryCollectionModel extends JsonCollection implements SubscriptionDeliveryCollection
{

    /**
     * @param SubscriptionDelivery $value
     * @return SubscriptionDeliveryCollection
     */
    public function add($value) {
        if (!$value instanceof SubscriptionDelivery) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SubscriptionDelivery
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SubscriptionDelivery) {
            $resolvedClass = $this->resolveDiscriminator(SubscriptionDelivery::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
