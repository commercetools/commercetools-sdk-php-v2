<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionTrigger extends JsonObject
{
    const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    const FIELD_ACTIONS = 'actions';

    /**
     * @return string
     */
    public function getResourceTypeId();

    /**
     * @return array
     */
    public function getActions();

    /**
     * @param string $resourceTypeId
     * @return $this
     */
    public function setResourceTypeId(string $resourceTypeId);

    /**
     * @param array $actions
     * @return $this
     */
    public function setActions(array $actions);

}
