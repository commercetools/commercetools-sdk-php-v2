<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\UpdateCollection;


interface SubscriptionUpdateCollection extends UpdateCollection {
    /**
     * @param $index
     * @return SubscriptionUpdate
     */
    public function at($index);

    /**
     * @return SubscriptionUpdate
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionUpdate
     */
    public function map($data, $index);
}
