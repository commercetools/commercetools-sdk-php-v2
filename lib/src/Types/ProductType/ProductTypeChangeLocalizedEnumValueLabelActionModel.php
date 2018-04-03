<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeLocalizedEnumValueLabelActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeLocalizedEnumValueLabelAction {
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueLabel';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var AttributeLocalizedEnumValue
     */
    protected $newValue;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeLocalizedEnumValueLabelAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return AttributeLocalizedEnumValue
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            $value = $this->raw(ProductTypeChangeLocalizedEnumValueLabelAction::FIELD_NEW_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributeLocalizedEnumValue::class, null);
            }
            $value = $this->mapData(AttributeLocalizedEnumValue::class, $value);

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
     * @param AttributeLocalizedEnumValue $newValue
     * @return $this
     */
    public function setNewValue(AttributeLocalizedEnumValue $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

}
