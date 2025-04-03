<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface EventDeliveryPayload extends SubscriptionNotification
{
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';
    public const FIELD_RESOURCE_TYPE = 'resourceType';
    public const FIELD_DATA = 'data';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * <p>Unique identifier of the Event.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The type of Event that has occurred.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>The type of resource targeted by the Event.</p>
     *

     * @return null|string
     */
    public function getResourceType();

    /**
     * <p>The data describing the event that has taken place.</p>
     *

     * @return null|mixed
     */
    public function getData();

    /**
     * <p>Date and time (UTC) the resource was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void;

    /**
     * @param ?JsonObject $data
     */
    public function setData(?JsonObject $data): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}
