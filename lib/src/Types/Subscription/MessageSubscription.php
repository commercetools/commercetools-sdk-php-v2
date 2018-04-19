<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonObject;

interface MessageSubscription extends JsonObject
{
    const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    const FIELD_TYPES = 'types';

    /**
     * @return string
     */
    public function getResourceTypeId();

    /**
     * @return array
     */
    public function getTypes();

    /**
     * @param string $resourceTypeId
     * @return $this
     */
    public function setResourceTypeId(string $resourceTypeId);

    /**
     * @param array $types
     * @return $this
     */
    public function setTypes($types);

}
