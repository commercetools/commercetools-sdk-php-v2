<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangePlainEnumValueLabelActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangePlainEnumValueLabelAction {
    const DISCRIMINATOR_VALUE = 'changePlainEnumValueLabel';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var AttributePlainEnumValue
     */
    protected $newValue;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangePlainEnumValueLabelAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return AttributePlainEnumValue
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            $value = $this->raw(ProductTypeChangePlainEnumValueLabelAction::FIELD_NEW_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributePlainEnumValue::class, null);
            }
            $value = $this->mapData(AttributePlainEnumValue::class, $value);

            $this->newValue = $value;
        }
        return $this->newValue;
    }

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName)
    {
        $this->attributeName = (string)$attributeName;

        return $this;
    }
    /**
     * @param AttributePlainEnumValue $newValue
     * @return $this
     */
    public function setNewValue(AttributePlainEnumValue $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

}
