<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MessageSubscription extends JsonObject
{
    public const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    public const FIELD_TYPES = 'types';

    /**

     * @return null|string
     */
    public function getResourceTypeId();

    /**

     * @return null|array
     */
    public function getTypes();

    /**
     * @param ?string $resourceTypeId
     */
    public function setResourceTypeId(?string $resourceTypeId): void;

    /**
     * @param ?array $types
     */
    public function setTypes(?array $types): void;
}
