<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\Collection;

interface MessageSubscriptionCollection extends Collection
{
    /**
     * @param $index
     * @return MessageSubscription
     */
    public function at($index);

    /**
     * @return MessageSubscription
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MessageSubscription
     */
    public function map($data, $index);
}
