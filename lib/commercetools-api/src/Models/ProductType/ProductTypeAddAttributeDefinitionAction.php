<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeAddAttributeDefinitionAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTE = 'attribute';

    /**
     * @return null|AttributeDefinitionDraft
     */
    public function getAttribute();

    public function setAttribute(?AttributeDefinitionDraft $attribute): void;
}
