<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

interface DuplicateFieldError extends ErrorObject {
    const FIELD_FIELD = 'field';
    const FIELD_DUPLICATE_VALUE = 'duplicateValue';

    /**
     * @return string
     */
    public function getField();

    /**
     * @return mixed
     */
    public function getDuplicateValue();

    /**
     * @param string $field
     * @return $this
     */
    public function setField(string $field);

    /**
     * @param mixed $duplicateValue
     * @return $this
     */
    public function setDuplicateValue($duplicateValue);

}
