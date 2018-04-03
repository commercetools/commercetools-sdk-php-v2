<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Error\ErrorObjectModel;

class RequiredFieldErrorModel extends ErrorObjectModel implements RequiredFieldError {
    const DISCRIMINATOR_VALUE = 'RequiredField';

    /**
     * @var string
     */
    protected $field;

    /**
     * @return string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            $value = $this->raw(RequiredFieldError::FIELD_FIELD);
            $value = (string)$value;
            $this->field = $value;
        }
        return $this->field;
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

}
