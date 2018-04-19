<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollection;


interface ResourceCreatedDeliveryCollection extends SubscriptionDeliveryCollection
{
    /**
     * @param $index
     * @return ResourceCreatedDelivery
     */
    public function at($index);

    /**
     * @return ResourceCreatedDelivery
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ResourceCreatedDelivery
     */
    public function map($data, $index);
}
