<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeAddAttributeDefinitionAction extends ProductTypeUpdateAction {
    protected $attribute;
    const DISCRIMINATOR_VALUE = 'addAttributeDefinition';

    /**
     * @return AttributeDefinitionDraft
     */
    public function getAttribute(): AttributeDefinitionDraft
    {
        if (is_null($this->attribute)) {
            $value = $this->raw('attribute');
            if (!is_null($value)) {
                $this->attribute = Mapper::map($value, AttributeDefinitionDraft::class);
            } else {
                return Mapper::map([], AttributeDefinitionDraft::class);
            }
        }
        return $this->attribute;
    }
                
}
