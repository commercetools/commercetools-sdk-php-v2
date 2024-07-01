<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CustomerSearchIndexingStatusResponse extends JsonObject
{
    public const FIELD_STATUS = 'status';
    public const FIELD_STATES = 'states';
    public const FIELD_STARTED_AT = 'startedAt';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_RETRY_COUNT = 'retryCount';

    /**
     * <p>Current status of indexing the Customer Search.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>Progress of indexing. Only available when indexing is in progress.</p>
     *

     * @return null|CustomerIndexingProgress
     */
    public function getStates();

    /**
     * <p>Date and time (UTC) when the last indexing started.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getStartedAt();

    /**
     * <p>Time when the status was last modified.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Indicates how many times the system tried to start indexing after failed attempts. The counter is set to null after an indexing finished successfully.</p>
     *

     * @return null|int
     */
    public function getRetryCount();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?CustomerIndexingProgress $states
     */
    public function setStates(?CustomerIndexingProgress $states): void;

    /**
     * @param ?DateTimeImmutable $startedAt
     */
    public function setStartedAt(?DateTimeImmutable $startedAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?int $retryCount
     */
    public function setRetryCount(?int $retryCount): void;
}
