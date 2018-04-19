<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeAttributeOrderActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeAttributeOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeOrder';

    /**
     * @var AttributeDefinitionDraftCollection
     */
    protected $attributes;

    /**
     * @return AttributeDefinitionDraftCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            $value = $this->raw(ProductTypeChangeAttributeOrderAction::FIELD_ATTRIBUTES);
            if (is_null($value)) {
                return $this->mapData(AttributeDefinitionDraftCollection::class, null);
            }
            $value = $this->mapData(AttributeDefinitionDraftCollection::class, $value);
            $this->attributes = $value;
        }
        return $this->attributes;
    }

    /**
     * @param AttributeDefinitionDraftCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeDefinitionDraftCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

}
