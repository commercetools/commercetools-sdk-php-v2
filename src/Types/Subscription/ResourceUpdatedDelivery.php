<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

interface ResourceUpdatedDelivery extends SubscriptionDelivery {
    const FIELD_VERSION = 'version';
    const FIELD_OLD_VERSION = 'oldVersion';

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return int
     */
    public function getOldVersion();

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param int $oldVersion
     * @return $this
     */
    public function setOldVersion(int $oldVersion);

}
