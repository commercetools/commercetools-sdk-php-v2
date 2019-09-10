<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeRemoveEnumValuesAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAME = 'attributeName';
    const FIELD_KEYS = 'keys';

    /**
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|array
     */
    public function getKeys();

    public function setAttributeName(?string $attributeName): void;

    public function setKeys(?array $keys): void;
}
