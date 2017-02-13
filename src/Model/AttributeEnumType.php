<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeEnumType extends AttributeType {
    protected $values;
    const DISCRIMINATOR_VALUE = 'enum';

    /**
     * @return AttributePlainEnumValue
     */
    public function getValues(): AttributePlainEnumValue
    {
        if (is_null($this->values)) {
            $value = $this->raw('values');
            if (!is_null($value)) {
                $this->values = Mapper::map($value, AttributePlainEnumValue::class);
            } else {
                return Mapper::map([], AttributePlainEnumValue::class);
            }
        }
        return $this->values;
    }
                
}
