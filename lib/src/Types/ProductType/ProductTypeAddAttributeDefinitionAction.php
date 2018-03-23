<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeAddAttributeDefinitionAction extends ProductTypeUpdateAction {
    const FIELD_ATTRIBUTE = 'attribute';

    /**
     * @return AttributeDefinitionDraft
     */
    public function getAttribute();

    /**
     * @param AttributeDefinitionDraft $attribute
     * @return $this
     */
    public function setAttribute(AttributeDefinitionDraft $attribute);

}
