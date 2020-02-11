<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ConcurrentModificationError extends ErrorObject
{

    public const FIELD_CURRENT_VERSION = 'currentVersion';

    /**
     * @return null|int
     */
    public function getCurrentVersion();

    public function setCurrentVersion(?int $currentVersion): void;
}
