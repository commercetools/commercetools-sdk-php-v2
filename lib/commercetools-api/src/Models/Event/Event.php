<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Event extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_ID = 'id';
    public const FIELD_NOTIFICATION_TYPE = 'notificationType';
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_TYPE = 'type';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * <p>Unique identifier of the Event.</p>
     *

     * @return null|string
     */
    public function getId();

    /**

     * @return null|string
     */
    public function getNotificationType();

    /**
     * <p>The type of resource targeted by the Event.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>The type of Event that has occurred.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Date and time (UTC) the Event was generated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $notificationType
     */
    public function setNotificationType(?string $notificationType): void;

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}
