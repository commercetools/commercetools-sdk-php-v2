<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LoggedResource;
use DateTimeImmutable;

interface Extension extends LoggedResource
{
    const FIELD_KEY = 'key';
    const FIELD_DESTINATION = 'destination';
    const FIELD_TRIGGERS = 'triggers';
    const FIELD_TIMEOUT_IN_MS = 'timeoutInMs';

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
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination();

    /**
     * @return null|ExtensionTriggerCollection
     */
    public function getTriggers();

    /**
     * @return null|int
     */
    public function getTimeoutInMs();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setDestination(?ExtensionDestination $destination): void;

    public function setTriggers(?ExtensionTriggerCollection $triggers): void;

    public function setTimeoutInMs(?int $timeoutInMs): void;
}
