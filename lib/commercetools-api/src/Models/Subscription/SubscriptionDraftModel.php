<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SubscriptionDraftModel extends JsonObjectModel implements SubscriptionDraft
{
    /**
     *
     * @var ?Destination
     */
    protected $destination;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?MessageSubscriptionCollection
     */
    protected $messages;

    /**
     *
     * @var ?ChangeSubscriptionCollection
     */
    protected $changes;

    /**
     *
     * @var ?EventSubscriptionCollection
     */
    protected $events;

    /**
     *
     * @var ?DeliveryFormat
     */
    protected $format;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Destination $destination = null,
        ?string $key = null,
        ?MessageSubscriptionCollection $messages = null,
        ?ChangeSubscriptionCollection $changes = null,
        ?EventSubscriptionCollection $events = null,
        ?DeliveryFormat $format = null
    ) {
        $this->destination = $destination;
        $this->key = $key;
        $this->messages = $messages;
        $this->changes = $changes;
        $this->events = $events;
        $this->format = $format;
    }

    /**
     * <p>Messaging service to which the notifications are sent.</p>
     *
     *
     * @return null|Destination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = DestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    /**
     * <p>User-defined unique identifier for the Subscription.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Messages to be subscribed to.</p>
     *
     *
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }
            $this->messages = MessageSubscriptionCollection::fromArray($data);
        }

        return $this->messages;
    }

    /**
     * <p>Changes to be subscribed to.</p>
     *
     *
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges()
    {
        if (is_null($this->changes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->changes = ChangeSubscriptionCollection::fromArray($data);
        }

        return $this->changes;
    }

    /**
     * <p>Events to be subscribed to.</p>
     *
     *
     * @return null|EventSubscriptionCollection
     */
    public function getEvents()
    {
        if (is_null($this->events)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_EVENTS);
            if (is_null($data)) {
                return null;
            }
            $this->events = EventSubscriptionCollection::fromArray($data);
        }

        return $this->events;
    }

    /**
     * <p>Format in which the payload is delivered. When not provided, the <a href="ctp:api:type:PlatformFormat">PlatformFormat</a> is selected by default.</p>
     *
     *
     * @return null|DeliveryFormat
     */
    public function getFormat()
    {
        if (is_null($this->format)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FORMAT);
            if (is_null($data)) {
                return null;
            }
            $className = DeliveryFormatModel::resolveDiscriminatorClass($data);
            $this->format = $className::of($data);
        }

        return $this->format;
    }


    /**
     * @param ?Destination $destination
     */
    public function setDestination(?Destination $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?MessageSubscriptionCollection $messages
     */
    public function setMessages(?MessageSubscriptionCollection $messages): void
    {
        $this->messages = $messages;
    }

    /**
     * @param ?ChangeSubscriptionCollection $changes
     */
    public function setChanges(?ChangeSubscriptionCollection $changes): void
    {
        $this->changes = $changes;
    }

    /**
     * @param ?EventSubscriptionCollection $events
     */
    public function setEvents(?EventSubscriptionCollection $events): void
    {
        $this->events = $events;
    }

    /**
     * @param ?DeliveryFormat $format
     */
    public function setFormat(?DeliveryFormat $format): void
    {
        $this->format = $format;
    }
}
