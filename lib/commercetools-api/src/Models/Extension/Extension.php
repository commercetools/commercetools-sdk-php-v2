<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use DateTimeImmutable;

interface Extension extends BaseResource
{
    const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    const FIELD_CREATED_BY = 'createdBy';
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
     * <p>The maximum time the commercetools platform waits for a response from the extension.
     * If not present, <code>2000</code> (2 seconds) is used.</p>
     *
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
