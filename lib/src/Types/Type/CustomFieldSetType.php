<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface CustomFieldSetType extends FieldType
{
    const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * @return FieldType
     */
    public function getElementType();

    /**
     * @param FieldType $elementType
     * @return $this
     */
    public function setElementType(FieldType $elementType);

}
