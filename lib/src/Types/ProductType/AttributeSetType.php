<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface AttributeSetType extends AttributeType
{
    const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * @return AttributeType
     */
    public function getElementType();

    /**
     * @param AttributeType $elementType
     * @return $this
     */
    public function setElementType(AttributeType $elementType);

}
