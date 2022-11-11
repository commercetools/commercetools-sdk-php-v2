<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RequiredFieldError extends ErrorObject
{
    public const FIELD_FIELD = 'field';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;A value is required for field $field.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Name of the field missing the value.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;
}
