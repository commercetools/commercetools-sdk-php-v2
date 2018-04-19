<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionDeliveryModel;

class ResourceDeletedDeliveryModel extends SubscriptionDeliveryModel implements ResourceDeletedDelivery
{
    const DISCRIMINATOR_VALUE = 'ResourceDeleted';

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
            $value = $this->raw(ResourceDeletedDelivery::FIELD_VERSION);
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
