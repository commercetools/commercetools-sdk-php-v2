<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObject;

interface ExtensionTrigger extends JsonObject
{
    const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    const FIELD_ACTIONS = 'actions';

    /**
     * @return null|string
     */
    public function getResourceTypeId();

    /**
     * @return null|array
     */
    public function getActions();

    public function setResourceTypeId(?string $resourceTypeId): void;

    public function setActions(?array $actions): void;
}
