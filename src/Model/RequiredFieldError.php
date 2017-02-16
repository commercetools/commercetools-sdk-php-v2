<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class RequiredFieldError extends ErrorObject {
    protected $field;
    const DISCRIMINATOR_VALUE = 'RequiredField';

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
                
}
