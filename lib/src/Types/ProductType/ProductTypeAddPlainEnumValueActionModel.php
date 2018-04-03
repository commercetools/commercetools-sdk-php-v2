<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeAddPlainEnumValueActionModel extends ProductTypeUpdateActionModel implements ProductTypeAddPlainEnumValueAction {
    const DISCRIMINATOR_VALUE = 'addPlainEnumValue';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var AttributePlainEnumValue
     */
    protected $value;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeAddPlainEnumValueAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return AttributePlainEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ProductTypeAddPlainEnumValueAction::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(AttributePlainEnumValue::class, null);
            }
            $value = $this->mapData(AttributePlainEnumValue::class, $value);

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
     * @param AttributePlainEnumValue $value
     * @return $this
     */
    public function setValue(AttributePlainEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

}
