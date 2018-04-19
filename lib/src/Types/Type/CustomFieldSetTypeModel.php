<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\FieldTypeModel;

class CustomFieldSetTypeModel extends FieldTypeModel implements CustomFieldSetType
{
    const DISCRIMINATOR_VALUE = 'Set';

    /**
     * @var FieldType
     */
    protected $elementType;

    /**
     * @return FieldType
     */
    public function getElementType()
    {
        if (is_null($this->elementType)) {
            $value = $this->raw(CustomFieldSetType::FIELD_ELEMENT_TYPE);
            $resolvedClass = $this->resolveDiscriminator(FieldType::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->elementType = $value;
        }
        return $this->elementType;
    }

    /**
     * @param FieldType $elementType
     * @return $this
     */
    public function setElementType(FieldType $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

}
