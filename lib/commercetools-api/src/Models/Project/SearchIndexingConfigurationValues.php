<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface SearchIndexingConfigurationValues extends JsonObject
{
    public const FIELD_STATUS = 'status';
    public const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';

    /**
     * <p>Current status of resource indexing. Present on Projects from 1 February 2019.</p>
     *

     * @return null|string
     */
    public function getStatus();

    /**
     * <p>Date and time (UTC) the Project was last updated. Only present on Projects last modified after 1 February 2019.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/client-logging#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;
}
