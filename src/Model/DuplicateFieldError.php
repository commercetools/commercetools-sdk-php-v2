<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class DuplicateFieldError extends ErrorObject {
    protected $field;
    protected $duplicateValue;
    const DISCRIMINATOR_VALUE = 'DuplicateField';

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
    public function getDuplicateValue(): array
    {
        if (is_null($this->duplicateValue)) {
            $value = $this->raw('duplicateValue');
            if (!is_null($value)) {
                $this->duplicateValue = $value;
            } else {
                return [];
            }
        }
        return $this->duplicateValue;
    }
                
}
