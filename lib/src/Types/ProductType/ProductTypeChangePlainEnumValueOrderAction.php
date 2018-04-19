<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeChangePlainEnumValueOrderAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_VALUES = 'values';

    /**
     * @return string
     */
    public function getAttributeName();

    /**
     * @return AttributePlainEnumValueCollection
     */
    public function getValues();

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName);

    /**
     * @param AttributePlainEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributePlainEnumValueCollection $values);

}
