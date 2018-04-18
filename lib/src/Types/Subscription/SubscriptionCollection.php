<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Common\ResourceCollection;


interface SubscriptionCollection extends ResourceCollection {
    /**
     * @param $index
     * @return Subscription
     */
    public function at($index);

    /**
     * @return Subscription
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Subscription
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return Subscription
     */
    public function byId($id);
}
