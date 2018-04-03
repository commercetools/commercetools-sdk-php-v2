<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeAddLocalizedEnumValueActionModel extends ProductTypeUpdateActionModel implements ProductTypeAddLocalizedEnumValueAction {
    const DISCRIMINATOR_VALUE = 'addLocalizedEnumValue';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var AttributeLocalizedEnumValue
     */
    protected $value;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeAddLocalizedEnumValueAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return AttributeLocalizedEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ProductTypeAddLocalizedEnumValueAction::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributeLocalizedEnumValue::class, null);
            }
            $value = $this->mapData(AttributeLocalizedEnumValue::class, $value);

            $this->value = $value;
        }
        return $this->value;
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
     * @param AttributeLocalizedEnumValue $value
     * @return $this
     */
    public function setValue(AttributeLocalizedEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

}
