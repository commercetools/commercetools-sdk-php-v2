<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidInputError extends ErrorObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Description of the constraints that are not met by the request. For example, <code>&quot;Invalid $propertyName. It may be a non-empty string up to $maxLength&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
