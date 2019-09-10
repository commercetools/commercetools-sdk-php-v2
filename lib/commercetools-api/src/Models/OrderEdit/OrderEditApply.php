<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;

interface OrderEditApply extends JsonObject
{
    const FIELD_EDIT_VERSION = 'editVersion';
    const FIELD_RESOURCE_VERSION = 'resourceVersion';

    /**
     * @return null|int
     */
    public function getEditVersion();

    /**
     * @return null|int
     */
    public function getResourceVersion();

    public function setEditVersion(?int $editVersion): void;

    public function setResourceVersion(?int $resourceVersion): void;
}
