<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateActionCollection;


interface SubscriptionUpdateActionCollection extends UpdateActionCollection {
    /**
     * @param $index
     * @return SubscriptionUpdateAction
     */
    public function at($index);

    /**
     * @return SubscriptionUpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionUpdateAction
     */
    public function map($data, $index);
}
