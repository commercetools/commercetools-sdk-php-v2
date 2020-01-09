<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObject;

interface ConcurrentModificationError extends ErrorObject
{
    const FIELD_SPECIFIED_VERSION = 'specifiedVersion';
    const FIELD_CURRENT_VERSION = 'currentVersion';
    const FIELD_CONFLICTED_RESOURCE = 'conflictedResource';

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
     * <p>The conflicted resource.</p>
     *
     * @return null|JsonObject
     */
    public function getConflictedResource();

    public function setSpecifiedVersion(?int $specifiedVersion): void;

    public function setCurrentVersion(?int $currentVersion): void;

    public function setConflictedResource(?JsonObject $conflictedResource): void;
}
