<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangePlainEnumValueLabelAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $newValue;
    const DISCRIMINATOR_VALUE = 'changePlainEnumValueLabel';

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
    public function getNewValue(): AttributePlainEnumValue
    {
        if (is_null($this->newValue)) {
            $value = $this->raw('newValue');
            if (!is_null($value)) {
                $this->newValue = Mapper::map($value, AttributePlainEnumValue::class);
            } else {
                return Mapper::map([], AttributePlainEnumValue::class);
            }
        }
        return $this->newValue;
    }
                
}
