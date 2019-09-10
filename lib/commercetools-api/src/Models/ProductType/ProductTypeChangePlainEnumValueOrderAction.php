<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeChangePlainEnumValueOrderAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_VALUES = 'values';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues();

    public function setAttributeName(?string $attributeName): void;

    public function setValues(?AttributePlainEnumValueCollection $values): void;
}
