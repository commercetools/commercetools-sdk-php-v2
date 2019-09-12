<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

interface AttributeSetType extends AttributeType
{
    const FIELD_ELEMENT_TYPE = 'elementType';

    /**
     * @return null|AttributeType
     */
    public function getElementType();

    public function setElementType(?AttributeType $elementType): void;
}
