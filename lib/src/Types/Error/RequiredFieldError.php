<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface RequiredFieldError extends ErrorObject
{
    const FIELD_FIELD = 'field';

    /**
     * @return string
     */
    public function getField();

    /**
     * @param string $field
     * @return $this
     */
    public function setField(string $field);

}
