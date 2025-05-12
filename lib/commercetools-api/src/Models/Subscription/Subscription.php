<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Subscription extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_KEY = 'key';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_CHANGES = 'changes';
    public const FIELD_EVENTS = 'events';
    public const FIELD_FORMAT = 'format';
    public const FIELD_STATUS = 'status';

    /**
     * <p>Unique identifier of the Subscription.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Subscription.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Subscription was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Subscription was last modified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Subscription.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Subscription.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Messaging service to which the notifications are sent.</p>
     *

     * @return null|Destination
     */
    public function getDestination();

    /**
     * <p>User-defined unique identifier of the Subscription.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Messages subscribed to.</p>
     *

     * @return null|MessageSubscriptionCollection
     */
    public function getMessages();

    /**
     * <p>Changes subscribed to.</p>
     *

     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * <p>Events subscribed to.</p>
     *

     * @return null|EventSubscriptionCollection
     */
    public function getEvents();

    /**
     * <p>Format in which the payload is delivered.</p>
     *

     * @return null|DeliveryFormat
     */
    public function getFormat();

    /**
     * <p>Status of the Subscription.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

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

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;
}
