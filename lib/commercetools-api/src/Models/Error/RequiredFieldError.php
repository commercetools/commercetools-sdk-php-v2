<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface RequiredFieldError extends ErrorObject
{
    
    const FIELD_FIELD = 'field';

    /**
     *
     * @return string|null
     */
    public function getField();
    public function setField(?string $field): void;
}