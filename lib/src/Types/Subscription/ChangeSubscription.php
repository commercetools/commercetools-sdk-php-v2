<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonObject;

interface ChangeSubscription extends JsonObject {
    const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';

    /**
     * @return string
     */
    public function getResourceTypeId();

    /**
     * @param string $resourceTypeId
     * @return $this
     */
    public function setResourceTypeId(string $resourceTypeId);

}
