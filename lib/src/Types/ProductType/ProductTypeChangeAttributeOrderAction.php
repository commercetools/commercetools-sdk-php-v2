<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

interface ProductTypeChangeAttributeOrderAction extends ProductTypeUpdateAction
{
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return AttributeDefinitionDraftCollection
     */
    public function getAttributes();

    /**
     * @param AttributeDefinitionDraftCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeDefinitionDraftCollection $attributes);

}
