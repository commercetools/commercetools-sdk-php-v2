<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeAddPlainEnumValueAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $value;
    const DISCRIMINATOR_VALUE = 'addPlainEnumValue';

    /**
     * @return string
     */
    public function getAttributeName(): string
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw('attributeName');
            if (!is_null($value)) {
                $this->attributeName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->attributeName;
    }
                

    /**
     * @return AttributePlainEnumValue
     */
    public function getValue(): AttributePlainEnumValue
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = Mapper::map($value, AttributePlainEnumValue::class);
            } else {
                return Mapper::map([], AttributePlainEnumValue::class);
            }
        }
        return $this->value;
    }
                
}
