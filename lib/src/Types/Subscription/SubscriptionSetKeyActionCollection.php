<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionUpdateActionCollection;


interface SubscriptionSetKeyActionCollection extends SubscriptionUpdateActionCollection
{
    /**
     * @param $index
     * @return SubscriptionSetKeyAction
     */
    public function at($index);

    /**
     * @return SubscriptionSetKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionSetKeyAction
     */
    public function map($data, $index);
}
