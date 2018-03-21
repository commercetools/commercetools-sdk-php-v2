<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeModel;

class AttributeNestedTypeModel extends AttributeTypeModel implements AttributeNestedType {
    const DISCRIMINATOR_VALUE = 'nested';

    /**
     * @var ProductTypeReference
     */
    protected $typeReference;

    /**
     * @return ProductTypeReference
     */
    public function getTypeReference()
    {
        if (is_null($this->typeReference)) {
            $value = $this->raw(AttributeNestedType::FIELD_TYPE_REFERENCE);
            if (is_null($value)) {
                return $this->mapData(ProductTypeReference::class, null);
            }
            $value = $this->mapData(ProductTypeReference::class, $value);

            $this->typeReference = $value;
        }
        return $this->typeReference;
    }

    /**
     * @param ProductTypeReference $typeReference
     * @return $this
     */
    public function setTypeReference(ProductTypeReference $typeReference)
    {
        $this->typeReference = $typeReference;

        return $this;
    }

}
