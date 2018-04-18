<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollection;


interface ResourceDeletedDeliveryCollection extends SubscriptionDeliveryCollection {
    /**
     * @param $index
     * @return ResourceDeletedDelivery
     */
    public function at($index);

    /**
     * @return ResourceDeletedDelivery
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ResourceDeletedDelivery
     */
    public function map($data, $index);
}
