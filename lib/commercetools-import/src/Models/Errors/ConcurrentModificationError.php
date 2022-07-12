<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ConcurrentModificationError extends ErrorObject
{
    public const FIELD_SPECIFIED_VERSION = 'specifiedVersion';
    public const FIELD_CURRENT_VERSION = 'currentVersion';
    public const FIELD_CONFLICTED_RESOURCE = 'conflictedResource';

    /**
     * <p>The version specified in the failed request.</p>
     *

     * @return null|int
     */
    public function getSpecifiedVersion();

    /**
     * <p>The current version of the resource.</p>
     *

     * @return null|int
     */
    public function getCurrentVersion();

    /**
     * <p>The resource in conflict.</p>
     *

     * @return null|mixed
     */
    public function getConflictedResource();

    /**
     * @param ?int $specifiedVersion
     */
    public function setSpecifiedVersion(?int $specifiedVersion): void;

    /**
     * @param ?int $currentVersion
     */
    public function setCurrentVersion(?int $currentVersion): void;

    /**
     * @param mixed $conflictedResource
     */
    public function setConflictedResource($conflictedResource): void;
}
