<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

interface RequiredFieldError extends ErrorObject
{
    const FIELD_FIELD = 'field';

    /**
     * @return null|string
     */
    public function getField();

    public function setField(?string $field): void;
}
