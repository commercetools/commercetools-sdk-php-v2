<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AttributeNestedType extends AttributeType {
    protected $typeReference;
    const DISCRIMINATOR_VALUE = 'nested';

    /**
     * @return ProductTypeReference
     */
    public function getTypeReference(): ProductTypeReference
    {
        if (is_null($this->typeReference)) {
            $value = $this->raw('typeReference');
            if (!is_null($value)) {
                $this->typeReference = Mapper::map($value, ProductTypeReference::class);
            } else {
                return Mapper::map([], ProductTypeReference::class);
            }
        }
        return $this->typeReference;
    }
                
}
