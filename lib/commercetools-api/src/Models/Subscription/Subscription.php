<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use DateTimeImmutable;

interface Subscription extends LoggedResource
{
    const FIELD_CHANGES = 'changes';
    const FIELD_DESTINATION = 'destination';
    const FIELD_KEY = 'key';
    const FIELD_MESSAGES = 'messages';
    const FIELD_FORMAT = 'format';
    const FIELD_STATUS = 'status';

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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
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

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setChanges(?ChangeSubscriptionCollection $changes): void;

    public function setDestination(?Destination $destination): void;

    public function setKey(?string $key): void;

    public function setMessages(?MessageSubscriptionCollection $messages): void;

    public function setFormat(?DeliveryFormat $format): void;

    public function setStatus(?string $status): void;
}
