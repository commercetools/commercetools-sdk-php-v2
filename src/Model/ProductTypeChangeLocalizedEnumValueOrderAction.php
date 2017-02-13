<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangeLocalizedEnumValueOrderAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $values;
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueOrder';

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
     * @return AttributeLocalizedEnumValueCollection
     */
    public function getValues(): AttributeLocalizedEnumValueCollection
    {
        if (is_null($this->values)) {
            $value = $this->raw('values');
            if (!is_null($value)) {
                $this->values = Mapper::map($value, AttributeLocalizedEnumValueCollection::class);
            } else {
                return Mapper::map([], AttributeLocalizedEnumValueCollection::class);
            }
        }
        return $this->values;
    }
                
}
