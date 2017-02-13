<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangeLabelAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $label;
    const DISCRIMINATOR_VALUE = 'changeLabel';

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
     * @return LocalizedString
     */
    public function getLabel(): LocalizedString
    {
        if (is_null($this->label)) {
            $value = $this->raw('label');
            if (!is_null($value)) {
                $this->label = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->label;
    }
                
}
