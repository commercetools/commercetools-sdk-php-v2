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
    public function getField();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;
}
