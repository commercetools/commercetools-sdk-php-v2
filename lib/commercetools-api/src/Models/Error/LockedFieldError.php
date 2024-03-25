<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LockedFieldError extends ErrorObject
{
    public const FIELD_FIELD = 'field';

    /**
     * <p>Field that is currently locked.</p>
     *

     * @return null|string
     */
    public function getField();

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;'$field' is locked by another request. Please try again later.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;
}
