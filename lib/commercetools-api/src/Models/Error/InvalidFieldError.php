<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidFieldError extends ErrorObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_INVALID_VALUE = 'invalidValue';
    public const FIELD_ALLOWED_VALUES = 'allowedValues';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><code>&quot;The value $invalidValue is not valid for field $field.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage();

    /**
     * <p>Name of the field with the invalid value.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * <p>Value invalid for the field.</p>
     *

     * @return null|mixed
     */
    public function getInvalidValue();

    /**
     * <p>Fixed set of allowed values for the field, if any.</p>
     *

     * @return null|array
     */
    public function getAllowedValues();

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void;

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param mixed $invalidValue
     */
    public function setInvalidValue($invalidValue): void;

    /**
     * @param ?array $allowedValues
     */
    public function setAllowedValues(?array $allowedValues): void;
}
