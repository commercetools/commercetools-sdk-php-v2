<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLConcurrentModificationError extends GraphQLErrorObject
{
    public const FIELD_CURRENT_VERSION = 'currentVersion';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Current version of the resource.</p>
     *

     * @return null|int
     */
    public function getCurrentVersion();

    /**
     * @param ?int $currentVersion
     */
    public function setCurrentVersion(?int $currentVersion): void;
}
