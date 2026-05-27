<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CircularDependencyError extends ErrorObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;Circular dependency detected: [ext-1, ext-2, ext-1]&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
