<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeAddPlainEnumValueAction extends ProductTypeUpdateAction {
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return AttributePlainEnumValue
     */
    public function getValue();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param AttributePlainEnumValue $value
     * @return $this
     */
    public function setValue(AttributePlainEnumValue $value);

}
