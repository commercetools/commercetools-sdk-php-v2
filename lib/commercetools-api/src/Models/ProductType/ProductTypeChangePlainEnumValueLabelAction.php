<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeChangePlainEnumValueLabelAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_NEW_VALUE = 'newValue';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|AttributePlainEnumValue
     */
    public function getNewValue();

    public function setAttributeName(?string $attributeName): void;

    public function setNewValue(?AttributePlainEnumValue $newValue): void;
}
