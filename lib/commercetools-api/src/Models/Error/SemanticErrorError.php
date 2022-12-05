<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SemanticErrorError extends ErrorObject
{
    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Plain text description of the error concerning the predicate. For example, <code>&quot;Invalid country code $countryCode provided for the field $fieldDefinition.&quot;</code>.</p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
