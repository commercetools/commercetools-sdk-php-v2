<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeSetType extends AttributeType {
    protected $elementType;
    const DISCRIMINATOR_VALUE = 'set';

    /**
     * @return AttributeType
     */
    public function getElementType(): AttributeType
    {
        if (is_null($this->elementType)) {
            $value = $this->raw('elementType');
            if (!is_null($value)) {
                $this->elementType = Mapper::map($value, AttributeType::resolveDiscriminatorClass($value));
            } else {
                return Mapper::map([], AttributeType::class);
            }
        }
        return $this->elementType;
    }
                
}
