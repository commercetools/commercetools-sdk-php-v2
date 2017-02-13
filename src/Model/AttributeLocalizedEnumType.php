<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeLocalizedEnumType extends AttributeType {
    protected $values;
    const DISCRIMINATOR_VALUE = 'lenum';

    /**
     * @return AttributeLocalizedEnumValue
     */
    public function getValues(): AttributeLocalizedEnumValue
    {
        if (is_null($this->values)) {
            $value = $this->raw('values');
            if (!is_null($value)) {
                $this->values = Mapper::map($value, AttributeLocalizedEnumValue::class);
            } else {
                return Mapper::map([], AttributeLocalizedEnumValue::class);
            }
        }
        return $this->values;
    }
                
}
