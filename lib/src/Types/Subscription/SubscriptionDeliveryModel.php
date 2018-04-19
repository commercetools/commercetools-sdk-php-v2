<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Reference;
use Commercetools\Types;

class SubscriptionDeliveryModel extends JsonObjectModel implements SubscriptionDelivery
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @param array $data
     */
    public function __construct(array $data = []) {
        parent::__construct($data);
        $this->setNotificationType(static::DISCRIMINATOR_VALUE);
    }

    /**
     * @var string
     */
    protected $projectKey;
    /**
     * @var string
     */
    protected $notificationType;
    /**
     * @var Reference
     */
    protected $resource;

    /**
     * @return string
     */
    public function getProjectKey()
    {
        if (is_null($this->projectKey)) {
            $value = $this->raw(SubscriptionDelivery::FIELD_PROJECT_KEY);
            $value = (string)$value;
            $this->projectKey = $value;
        }
        return $this->projectKey;
    }
    /**
     * @return string
     */
    public function getNotificationType()
    {
        if (is_null($this->notificationType)) {
            $value = $this->raw(SubscriptionDelivery::FIELD_NOTIFICATION_TYPE);
            $value = (string)$value;
            $this->notificationType = $value;
        }
        return $this->notificationType;
    }
    /**
     * @return Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            $value = $this->raw(SubscriptionDelivery::FIELD_RESOURCE);
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->resource = $value;
        }
        return $this->resource;
    }

    /**
     * @param string $projectKey
     * @return $this
     */
    public function setProjectKey(string $projectKey)
    {
        $this->projectKey = (string)$projectKey;

        return $this;
    }
    /**
     * @param string $notificationType
     * @return $this
     */
    public function setNotificationType(string $notificationType)
    {
        $this->notificationType = (string)$notificationType;

        return $this;
    }
    /**
     * @param Reference $resource
     * @return $this
     */
    public function setResource(Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

}
