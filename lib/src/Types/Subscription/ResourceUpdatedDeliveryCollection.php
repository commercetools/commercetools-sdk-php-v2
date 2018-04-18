<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollection;


interface ResourceUpdatedDeliveryCollection extends SubscriptionDeliveryCollection {
    /**
     * @param $index
     * @return ResourceUpdatedDelivery
     */
    public function at($index);

    /**
     * @return ResourceUpdatedDelivery
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ResourceUpdatedDelivery
     */
    public function map($data, $index);
}
