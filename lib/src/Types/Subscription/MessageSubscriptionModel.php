<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class MessageSubscriptionModel extends JsonObjectModel implements MessageSubscription {
    /**
     * @var string
     */
    protected $resourceTypeId;
    /**
     * @var array
     */
    protected $types;

    /**
     * @return string
     */
    public function getResourceTypeId()
    {
        if (is_null($this->resourceTypeId)) {
            $value = $this->raw(MessageSubscription::FIELD_RESOURCE_TYPE_ID);
            $value = (string)$value;
            $this->resourceTypeId = $value;
        }
        return $this->resourceTypeId;
    }
    /**
     * @return array
     */
    public function getTypes()
    {
        if (is_null($this->types)) {
            $value = $this->raw(MessageSubscription::FIELD_TYPES);
            $value = (array)$value;
            $this->types = $value;
        }
        return $this->types;
    }

    /**
     * @param string $resourceTypeId
     * @return $this
     */
    public function setResourceTypeId(string $resourceTypeId)
    {
        $this->resourceTypeId = (string)$resourceTypeId;

        return $this;
    }
    /**
     * @param $types
     * @return $this
     */
    public function setTypes($types)
    {
        $this->types = $types;

        return $this;
    }

}
