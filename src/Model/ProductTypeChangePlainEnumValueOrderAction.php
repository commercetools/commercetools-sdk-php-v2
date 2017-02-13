<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangePlainEnumValueOrderAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $values;
    const DISCRIMINATOR_VALUE = 'changePlainEnumValueOrder';

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
     * @return AttributePlainEnumValueCollection
     */
    public function getValues(): AttributePlainEnumValueCollection
    {
        if (is_null($this->values)) {
            $value = $this->raw('values');
            if (!is_null($value)) {
                $this->values = Mapper::map($value, AttributePlainEnumValueCollection::class);
            } else {
                return Mapper::map([], AttributePlainEnumValueCollection::class);
            }
        }
        return $this->values;
    }
                
}
