<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeHistory\ErrorObject;

interface TooManyRequestsError extends ErrorObject
{


    /**
     * <p><code>&quot;TooManyRequests&quot;</code></p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;You have made too many requests. Please try again later.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void;

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
