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
    public const FIELD_CHANGES = 'changes';
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_KEY = 'key';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_FORMAT = 'format';
    public const FIELD_STATUS = 'status';

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
     * <p>Present on resources created after 2019-02-01 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 2019-02-01 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|ChangeSubscriptionCollection
     */
    public function getChanges();

    /**
     * @return null|Destination
     */
    public function getDestination();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|MessageSubscriptionCollection
     */
    public function getMessages();

    /**
     * @return null|DeliveryFormat
     */
    public function getFormat();

    /**
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
     * @param ?ChangeSubscriptionCollection $changes
     */
    public function setChanges(?ChangeSubscriptionCollection $changes): void;

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
     * @param ?DeliveryFormat $format
     */
    public function setFormat(?DeliveryFormat $format): void;

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;
}
