<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface ConcurrentModificationError extends ErrorObject
{
    const FIELD_CURRENT_VERSION = 'currentVersion';

    /**
     * @return null|int
     */
    public function getCurrentVersion();

    public function setCurrentVersion(?int $currentVersion): void;
}
