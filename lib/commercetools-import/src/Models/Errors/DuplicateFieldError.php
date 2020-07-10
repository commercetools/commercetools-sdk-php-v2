<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Errors;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface DuplicateFieldError extends ErrorObject
{

    public const FIELD_FIELD = 'field';
    public const FIELD_DUPLICATE_VALUE = 'duplicateValue';

    /**
     * <p>The name of the field.</p>
     *
     * @return null|string
     */
    public function getField();

    /**
     * <p>The offending duplicate value.</p>
     *
     * @return null|JsonObject
     */
    public function getDuplicateValue();

    public function setField(?string $field): void;

    public function setDuplicateValue(?JsonObject $duplicateValue): void;
}
