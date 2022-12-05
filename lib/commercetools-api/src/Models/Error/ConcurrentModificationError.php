<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ConcurrentModificationError extends ErrorObject
{
    public const FIELD_CURRENT_VERSION = 'currentVersion';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Object $resourceId has a different version than expected. Expected: $expectedVersion - Actual: $currentVersion.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Current version of the resource.</p>
     *

     * @return null|int
     */
    public function getCurrentVersion();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?int $currentVersion
     */
    public function setCurrentVersion(?int $currentVersion): void;
}
