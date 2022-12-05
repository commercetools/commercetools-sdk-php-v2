<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GeneralError extends ErrorObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Description about any known details of the problem, for example, <code>&quot;Write operations are temporarily unavailable&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
