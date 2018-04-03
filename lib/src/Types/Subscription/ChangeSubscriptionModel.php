<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ChangeSubscriptionModel extends JsonObjectModel implements ChangeSubscription {
    /**
     * @var string
     */
    protected $resourceTypeId;

    /**
     * @return string
     */
    public function getResourceTypeId()
    {
        if (is_null($this->resourceTypeId)) {
            $value = $this->raw(ChangeSubscription::FIELD_RESOURCE_TYPE_ID);
            $value = (string)$value;
            $this->resourceTypeId = $value;
        }
        return $this->resourceTypeId;
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

}
