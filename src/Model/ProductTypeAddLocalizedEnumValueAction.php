<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeAddLocalizedEnumValueAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $value;
    const DISCRIMINATOR_VALUE = 'addLocalizedEnumValue';

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
    public function getValue(): AttributeLocalizedEnumValue
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = Mapper::map($value, AttributeLocalizedEnumValue::class);
            } else {
                return Mapper::map([], AttributeLocalizedEnumValue::class);
            }
        }
        return $this->value;
    }
                
}
