<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

class ExtensionTriggerModel extends JsonObjectModel implements ExtensionTrigger
{
    /**
     * @var string
     */
    protected $resourceTypeId;
    /**
     * @var array
     */
    protected $actions;

    /**
     * @return string
     */
    public function getResourceTypeId()
    {
        if (is_null($this->resourceTypeId)) {
            $value = $this->raw(ExtensionTrigger::FIELD_RESOURCE_TYPE_ID);
            $value = (string)$value;
            $this->resourceTypeId = $value;
        }
        return $this->resourceTypeId;
    }
    /**
     * @return array
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            $value = $this->raw(ExtensionTrigger::FIELD_ACTIONS);
            $value = (array)$value;
            $this->actions = $value;
        }
        return $this->actions;
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
     * @param array $actions
     * @return $this
     */
    public function setActions(array $actions)
    {
        $this->actions = $actions;

        return $this;
    }

}
