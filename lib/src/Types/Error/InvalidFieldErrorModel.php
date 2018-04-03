<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

class InvalidFieldErrorModel extends ErrorObjectModel implements InvalidFieldError {
    const DISCRIMINATOR_VALUE = 'InvalidField';

    /**
     * @var string
     */
    protected $field;
    /**
     * @var mixed
     */
    protected $invalidValue;
    /**
     * @var array
     */
    protected $allowedValues;

    /**
     * @return string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            $value = $this->raw(InvalidFieldError::FIELD_FIELD);
            $value = (string)$value;
            $this->field = $value;
        }
        return $this->field;
    }
    /**
     * @return mixed
     */
    public function getInvalidValue()
    {
        if (is_null($this->invalidValue)) {
            $value = $this->raw(InvalidFieldError::FIELD_INVALID_VALUE);
            $this->invalidValue = $value;
        }
        return $this->invalidValue;
    }
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        if (is_null($this->allowedValues)) {
            $value = $this->raw(InvalidFieldError::FIELD_ALLOWED_VALUES);
            $this->allowedValues = $value;
        }
        return $this->allowedValues;
    }

    /**
     * @param string $field
     * @return $this
     */
    public function setField(string $field)
    {
        $this->field = (string)$field;

        return $this;
    }
    /**
     * @param $invalidValue
     * @return $this
     */
    public function setInvalidValue($invalidValue)
    {
        $this->invalidValue = $invalidValue;

        return $this;
    }
    /**
     * @param $allowedValues
     * @return $this
     */
    public function setAllowedValues($allowedValues)
    {
        $this->allowedValues = $allowedValues;

        return $this;
    }

}
