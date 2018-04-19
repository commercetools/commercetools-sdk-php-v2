<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\SubscriptionUpdateActionCollection;


interface SubscriptionSetChangesActionCollection extends SubscriptionUpdateActionCollection
{
    /**
     * @param $index
     * @return SubscriptionSetChangesAction
     */
    public function at($index);

    /**
     * @return SubscriptionSetChangesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionSetChangesAction
     */
    public function map($data, $index);
}
