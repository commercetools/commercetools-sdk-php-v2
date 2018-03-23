<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\Collection;

interface ChangeSubscriptionCollection extends Collection {
    /**
     * @param $index
     * @return ChangeSubscription
     */
    public function at($index);

    /**
     * @return ChangeSubscription
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChangeSubscription
     */
    public function map($data, $index);
}
