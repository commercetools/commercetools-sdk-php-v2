<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChangeSubscription extends JsonObject
{
    public const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';

    /**
     * <p>Unique identifier for the type of resource, for example, <code>cart</code>.</p>
     *

     * @return null|string
     */
    public function getResourceTypeId();

    /**
     * @param ?string $resourceTypeId
     */
    public function setResourceTypeId(?string $resourceTypeId): void;
}
