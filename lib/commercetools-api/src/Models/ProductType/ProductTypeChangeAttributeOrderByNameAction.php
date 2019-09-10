<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeChangeAttributeOrderByNameAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE_NAMES = 'attributeNames';

    /**
     * @return null|array
     */
    public function getAttributeNames();

    public function setAttributeNames(?array $attributeNames): void;
}
