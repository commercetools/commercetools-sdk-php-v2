<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangeLocalizedEnumValueLabelAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $newValue;
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueLabel';

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
     * @return AttributeLocalizedEnumValue
     */
    public function getNewValue(): AttributeLocalizedEnumValue
    {
        if (is_null($this->newValue)) {
            $value = $this->raw('newValue');
            if (!is_null($value)) {
                $this->newValue = Mapper::map($value, AttributeLocalizedEnumValue::class);
            } else {
                return Mapper::map([], AttributeLocalizedEnumValue::class);
            }
        }
        return $this->newValue;
    }
                
}
