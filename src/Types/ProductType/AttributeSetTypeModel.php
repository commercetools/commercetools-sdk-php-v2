<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeModel;

class AttributeSetTypeModel extends AttributeTypeModel implements AttributeSetType {
    const DISCRIMINATOR_VALUE = 'set';

    /**
     * @var AttributeType
     */
    protected $elementType;

    /**
     * @return AttributeType
     */
    public function getElementType()
    {
        if (is_null($this->elementType)) {
            $value = $this->raw(AttributeSetType::FIELD_ELEMENT_TYPE);
            $resolvedClass = $this->resolveDiscriminator(AttributeType::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->elementType = $value;
        }
        return $this->elementType;
    }

    /**
     * @param AttributeType $elementType
     * @return $this
     */
    public function setElementType(AttributeType $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

}
