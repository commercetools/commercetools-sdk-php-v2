<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

interface CustomFieldSetType extends FieldType
{
    const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * @return null|FieldType
     */
    public function getElementType();

    public function setElementType(?FieldType $elementType): void;
}
