<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionUpdateActionCollection;


interface SubscriptionSetMessagesActionCollection extends SubscriptionUpdateActionCollection
{
    /**
     * @param $index
     * @return SubscriptionSetMessagesAction
     */
    public function at($index);

    /**
     * @return SubscriptionSetMessagesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionSetMessagesAction
     */
    public function map($data, $index);
}
