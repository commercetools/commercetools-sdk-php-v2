<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class DuplicateAttributeValueError extends ErrorObject {
    protected $attribute;
    const DISCRIMINATOR_VALUE = 'DuplicateAttributeValue';

    /**
     * @return Attribute
     */
    public function getAttribute(): Attribute
    {
        if (is_null($this->attribute)) {
            $value = $this->raw('attribute');
            if (!is_null($value)) {
                $this->attribute = Mapper::map($value, Attribute::class);
            } else {
                return Mapper::map([], Attribute::class);
            }
        }
        return $this->attribute;
    }
                
}
