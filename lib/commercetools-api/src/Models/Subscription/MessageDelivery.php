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

interface MessageDelivery extends SubscriptionDelivery
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_SEQUENCE_NUMBER = 'sequenceNumber';
    public const FIELD_RESOURCE_VERSION = 'resourceVersion';
    public const FIELD_PAYLOAD_NOT_INCLUDED = 'payloadNotIncluded';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|int
     */
    public function getSequenceNumber();

    /**
     * @return null|int
     */
    public function getResourceVersion();

    /**
     * @return null|PayloadNotIncluded
     */
    public function getPayloadNotIncluded();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setSequenceNumber(?int $sequenceNumber): void;

    public function setResourceVersion(?int $resourceVersion): void;

    public function setPayloadNotIncluded(?PayloadNotIncluded $payloadNotIncluded): void;
}
