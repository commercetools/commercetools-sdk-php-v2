<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeAddAttributeDefinitionActionModel extends ProductTypeUpdateActionModel implements ProductTypeAddAttributeDefinitionAction {
    const DISCRIMINATOR_VALUE = 'addAttributeDefinition';

    /**
     * @var AttributeDefinitionDraft
     */
    protected $attribute;

    /**
     * @return AttributeDefinitionDraft
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            $value = $this->raw(ProductTypeAddAttributeDefinitionAction::FIELD_ATTRIBUTE);
            if (is_null($value)) {
                return $this->mapData(AttributeDefinitionDraft::class, null);
            }
            $value = $this->mapData(AttributeDefinitionDraft::class, $value);

            $this->attribute = $value;
        }
        return $this->attribute;
    }

    /**
     * @param AttributeDefinitionDraft $attribute
     * @return $this
     */
    public function setAttribute(AttributeDefinitionDraft $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

}
