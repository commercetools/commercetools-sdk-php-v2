<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SubscriptionDraft extends JsonObject
{
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_KEY = 'key';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_CHANGES = 'changes';
    public const FIELD_EVENTS = 'events';
    public const FIELD_FORMAT = 'format';

    /**
     * <p>Messaging service to which the notifications are sent.</p>
     *

     * @return null|Destination
     */
    public function getDestination();

    /**
     * <p>User-defined unique identifier for the Subscription.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Messages to be subscribed to.</p>
     *

     * @return null|MessageSubscriptionCollection
     */
    public function getMessages();

    /**
     * <p>Changes to be subscribed to.</p>
     *

     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * <p>Events to be subscribed to.</p>
     *

     * @return null|EventSubscriptionCollection
     */
    public function getEvents();

    /**
     * <p>Format in which the payload is delivered. When not provided, the <a href="ctp:api:type:PlatformFormat">PlatformFormat</a> is selected by default.</p>
     *

     * @return null|DeliveryFormat
     */
    public function getFormat();

    /**
     * @param ?Destination $destination
     */
    public function setDestination(?Destination $destination): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?MessageSubscriptionCollection $messages
     */
    public function setMessages(?MessageSubscriptionCollection $messages): void;

    /**
     * @param ?ChangeSubscriptionCollection $changes
     */
    public function setChanges(?ChangeSubscriptionCollection $changes): void;

    /**
     * @param ?EventSubscriptionCollection $events
     */
    public function setEvents(?EventSubscriptionCollection $events): void;

    /**
     * @param ?DeliveryFormat $format
     */
    public function setFormat(?DeliveryFormat $format): void;
}
