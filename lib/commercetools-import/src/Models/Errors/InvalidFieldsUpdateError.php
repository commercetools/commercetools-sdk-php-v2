<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidFieldsUpdateError extends ErrorObject
{
    public const FIELD_FIELDS = 'fields';

    /**
     * <p><code>&quot;The following fields are currently not supported for changes/updates&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Fields that cannot be updated.</p>
     *

     * @return null|array
     */
    public function getFields();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?array $fields
     */
    public function setFields(?array $fields): void;
}
