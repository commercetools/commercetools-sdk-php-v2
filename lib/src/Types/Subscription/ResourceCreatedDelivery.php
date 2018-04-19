<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface ResourceCreatedDelivery extends SubscriptionDelivery
{
    const FIELD_VERSION = 'version';

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

}
