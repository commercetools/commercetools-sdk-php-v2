<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface InvalidFieldError extends ErrorObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_INVALID_VALUE = 'invalidValue';
    public const FIELD_ALLOWED_VALUES = 'allowedValues';
    public const FIELD_RESOURCE_INDEX = 'resourceIndex';

    /**
     * <p>The name of the field.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * <p>The invalid value.</p>
     *

     * @return null|mixed
     */
    public function getInvalidValue();

    /**
     * <p>The set of allowed values for the field, if any.</p>
     *

     * @return null|array
     */
    public function getAllowedValues();

    /**

     * @return null|int
     */
    public function getResourceIndex();

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

    /**
     * @param ?int $resourceIndex
     */
    public function setResourceIndex(?int $resourceIndex): void;
}
