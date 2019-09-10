<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface DuplicateFieldError extends ErrorObject
{
    const FIELD_FIELD = 'field';
    const FIELD_DUPLICATE_VALUE = 'duplicateValue';

    /**
     * @return null|string
     */
    public function getField();

    /**
     * @return null|JsonObject
     */
    public function getDuplicateValue();

    public function setField(?string $field): void;

    public function setDuplicateValue(?JsonObject $duplicateValue): void;
}
