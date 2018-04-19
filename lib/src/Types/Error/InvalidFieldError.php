<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface InvalidFieldError extends ErrorObject
{
    const FIELD_FIELD = 'field';
    const FIELD_INVALID_VALUE = 'invalidValue';
    const FIELD_ALLOWED_VALUES = 'allowedValues';

    /**
     * @return string
     */
    public function getField();

    /**
     * @return mixed
     */
    public function getInvalidValue();

    /**
     * @return array
     */
    public function getAllowedValues();

    /**
     * @param string $field
     * @return $this
     */
    public function setField(string $field);

    /**
     * @param mixed $invalidValue
     * @return $this
     */
    public function setInvalidValue($invalidValue);

    /**
     * @param array $allowedValues
     * @return $this
     */
    public function setAllowedValues($allowedValues);

}
