<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

class DuplicateFieldErrorModel extends ErrorObjectModel implements DuplicateFieldError {
    const DISCRIMINATOR_VALUE = 'DuplicateField';

    /**
     * @var string
     */
    protected $field;
    /**
     * @var mixed
     */
    protected $duplicateValue;

    /**
     * @return string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            $value = $this->raw(DuplicateFieldError::FIELD_FIELD);
            $value = (string)$value;
            $this->field = $value;
        }
        return $this->field;
    }
    /**
     * @return mixed
     */
    public function getDuplicateValue()
    {
        if (is_null($this->duplicateValue)) {
            $value = $this->raw(DuplicateFieldError::FIELD_DUPLICATE_VALUE);
            $this->duplicateValue = $value;
        }
        return $this->duplicateValue;
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
     * @param $duplicateValue
     * @return $this
     */
    public function setDuplicateValue($duplicateValue)
    {
        $this->duplicateValue = $duplicateValue;

        return $this;
    }

}
