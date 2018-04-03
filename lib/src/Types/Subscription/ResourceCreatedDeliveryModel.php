<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionDeliveryModel;

class ResourceCreatedDeliveryModel extends SubscriptionDeliveryModel implements ResourceCreatedDelivery {
    const DISCRIMINATOR_VALUE = 'ResourceCreated';

    /**
     * @var int
     */
    protected $version;

    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(ResourceCreatedDelivery::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
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

}
