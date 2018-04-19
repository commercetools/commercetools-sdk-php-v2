<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionDeliveryCollection;


interface MessageDeliveryCollection extends SubscriptionDeliveryCollection
{
    /**
     * @param $index
     * @return MessageDelivery
     */
    public function at($index);

    /**
     * @return MessageDelivery
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MessageDelivery
     */
    public function map($data, $index);
}
