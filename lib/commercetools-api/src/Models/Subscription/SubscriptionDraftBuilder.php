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
 * @implements Builder<SubscriptionDraft>
 */
final class SubscriptionDraftBuilder implements Builder
{
    /**

     * @var ?ChangeSubscriptionCollection
     */
    private $changes;

    /**

     * @var null|Destination|DestinationBuilder
     */
    private $destination;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?MessageSubscriptionCollection
     */
    private $messages;

    /**

     * @var ?EventSubscriptionCollection
     */
    private $events;

    /**

     * @var null|DeliveryFormat|DeliveryFormatBuilder
     */
    private $format;

    /**
     * <p>Changes to be subscribed to.</p>
     *

     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * <p>Messaging service to which the notifications are sent.</p>
     *

     * @return null|Destination
     */
    public function getDestination()
    {
        return $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination;
    }

    /**
     * <p>User-defined unique identifier for the Subscription.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Messages to be subscribed to.</p>
     *

     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * <p>Events to be subscribed to.</p>
     *

     * @return null|EventSubscriptionCollection
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * <p>Format in which the payload is delivered. When not provided, the <a href="ctp:api:type:PlatformFormat">PlatformFormat</a> is selected by default.</p>
     *

     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        return $this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format;
    }

    /**
     * @param ?ChangeSubscriptionCollection $changes
     * @return $this
     */
    public function withChanges(?ChangeSubscriptionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

    /**
     * @param ?Destination $destination
     * @return $this
     */
    public function withDestination(?Destination $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?MessageSubscriptionCollection $messages
     * @return $this
     */
    public function withMessages(?MessageSubscriptionCollection $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @param ?EventSubscriptionCollection $events
     * @return $this
     */
    public function withEvents(?EventSubscriptionCollection $events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @param ?DeliveryFormat $format
     * @return $this
     */
    public function withFormat(?DeliveryFormat $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @deprecated use withDestination() instead
     * @return $this
     */
    public function withDestinationBuilder(?DestinationBuilder $destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @deprecated use withFormat() instead
     * @return $this
     */
    public function withFormatBuilder(?DeliveryFormatBuilder $format)
    {
        $this->format = $format;

        return $this;
    }

    public function build(): SubscriptionDraft
    {
        return new SubscriptionDraftModel(
            $this->changes,
            $this->destination instanceof DestinationBuilder ? $this->destination->build() : $this->destination,
            $this->key,
            $this->messages,
            $this->events,
            $this->format instanceof DeliveryFormatBuilder ? $this->format->build() : $this->format
        );
    }

    public static function of(): SubscriptionDraftBuilder
    {
        return new self();
    }
}
