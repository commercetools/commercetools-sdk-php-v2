<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeSetInputTipAction extends ProductTypeUpdateAction {
    protected $attributeName;
    protected $inputTip;
    const DISCRIMINATOR_VALUE = 'setInputTip';

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
    public function getInputTip(): LocalizedString
    {
        if (is_null($this->inputTip)) {
            $value = $this->raw('inputTip');
            if (!is_null($value)) {
                $this->inputTip = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->inputTip;
    }
                
}
