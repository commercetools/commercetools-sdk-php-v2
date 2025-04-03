<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<EventSubscription>
 */
final class EventSubscriptionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $resourceTypeId;

    /**

     * @var ?array
     */
    private $types;

    /**
     * <p>Unique identifier for the type of resource, for example, <code>import-api</code>.</p>
     *

     * @return null|string
     */
    public function getResourceTypeId()
    {
        return $this->resourceTypeId;
    }

    /**
     * <p>Must contain valid event types for the resource.
     * For example, for resource type <code>import-api</code> the event type <code>ImportContainerCreated</code> is valid.
     * If no <code>types</code> are given, the Subscription will receive all events for this resource.</p>
     *

     * @return null|array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param ?string $resourceTypeId
     * @return $this
     */
    public function withResourceTypeId(?string $resourceTypeId)
    {
        $this->resourceTypeId = $resourceTypeId;

        return $this;
    }

    /**
     * @param ?array $types
     * @return $this
     */
    public function withTypes(?array $types)
    {
        $this->types = $types;

        return $this;
    }


    public function build(): EventSubscription
    {
        return new EventSubscriptionModel(
            $this->resourceTypeId,
            $this->types
        );
    }

    public static function of(): EventSubscriptionBuilder
    {
        return new self();
    }
}
