<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchNotReadyError extends ErrorObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>$Search is not ready. Check the indexing-status endpoint and that the feature has been activated in the project settings.</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
