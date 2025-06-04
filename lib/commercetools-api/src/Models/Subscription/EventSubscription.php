<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface EventSubscription extends JsonObject
{
    public const FIELD_RESOURCE_TYPE_ID = 'resourceTypeId';
    public const FIELD_TYPES = 'types';

    /**
     * <p>Unique identifier for the type of resource.</p>
     *

     * @return null|string
     */
    public function getResourceTypeId();

    /**
     * <p>Must contain valid event types for the resource.
     * For example, for resource type <code>import-api</code> the event type <code>ImportContainerCreated</code> is valid.
     * If no <code>types</code> are given, the Subscription will receive all events for the defined resource type.</p>
     *

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
