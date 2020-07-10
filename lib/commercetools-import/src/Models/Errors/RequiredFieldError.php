<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface RequiredFieldError extends ErrorObject
{

    public const FIELD_FIELD = 'field';

    /**
     * <p>The name of the field.</p>
     *
     * @return null|string
     */
    public function getField();

    public function setField(?string $field): void;
}
