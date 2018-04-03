<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionDeliveryModel;

class ResourceUpdatedDeliveryModel extends SubscriptionDeliveryModel implements ResourceUpdatedDelivery {
    const DISCRIMINATOR_VALUE = 'ResourceUpdated';

    /**
     * @var int
     */
    protected $version;
    /**
     * @var int
     */
    protected $oldVersion;

    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(ResourceUpdatedDelivery::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return int
     */
    public function getOldVersion()
    {
        if (is_null($this->oldVersion)) {
            $value = $this->raw(ResourceUpdatedDelivery::FIELD_OLD_VERSION);
            $value = (int)$value;
            $this->oldVersion = $value;
        }
        return $this->oldVersion;
    }

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }
    /**
     * @param int $oldVersion
     * @return $this
     */
    public function setOldVersion(int $oldVersion)
    {
        $this->oldVersion = (int)$oldVersion;

        return $this;
    }

}
