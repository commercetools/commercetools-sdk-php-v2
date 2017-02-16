<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InvalidFieldError extends ErrorObject {
    protected $field;
    protected $invalidValue;
    protected $allowedValues;
    const DISCRIMINATOR_VALUE = 'InvalidField';

    /**
     * @return string
     */
    public function getField(): string
    {
        if (is_null($this->field)) {
            $value = $this->raw('field');
            if (!is_null($value)) {
                $this->field = (string)$value;
            } else {
                return '';
            }
        }
        return $this->field;
    }
                

    /**
     * @return array
     */
    public function getInvalidValue(): array
    {
        if (is_null($this->invalidValue)) {
            $value = $this->raw('invalidValue');
            if (!is_null($value)) {
                $this->invalidValue = $value;
            } else {
                return [];
            }
        }
        return $this->invalidValue;
    }
                

    /**
     * @return array
     */
    public function getAllowedValues(): array
    {
        if (is_null($this->allowedValues)) {
            $value = $this->raw('allowedValues');
            if (!is_null($value)) {
                $this->allowedValues = $value;
            } else {
                return [];
            }
        }
        return $this->allowedValues;
    }
                
}
