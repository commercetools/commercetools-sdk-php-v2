<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeChangeAttributeOrderAction extends ProductTypeUpdateAction {
    protected $attributes;
    const DISCRIMINATOR_VALUE = 'changeAttributeOrder';

    /**
     * @return AttributeDefinitionCollection
     */
    public function getAttributes(): AttributeDefinitionCollection
    {
        if (is_null($this->attributes)) {
            $value = $this->raw('attributes');
            if (!is_null($value)) {
                $this->attributes = Mapper::map($value, AttributeDefinitionCollection::class);
            } else {
                return Mapper::map([], AttributeDefinitionCollection::class);
            }
        }
        return $this->attributes;
    }
                
}
