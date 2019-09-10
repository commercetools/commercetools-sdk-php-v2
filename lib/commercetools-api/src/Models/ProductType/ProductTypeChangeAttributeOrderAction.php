<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

interface ProductTypeChangeAttributeOrderAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes();

    public function setAttributes(?AttributeDefinitionCollection $attributes): void;
}
