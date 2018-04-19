<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\AttributeTypeModel;

class AttributeEnumTypeModel extends AttributeTypeModel implements AttributeEnumType
{
    const DISCRIMINATOR_VALUE = 'enum';

    /**
     * @var AttributePlainEnumValueCollection
     */
    protected $values;

    /**
     * @return AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            $value = $this->raw(AttributeEnumType::FIELD_VALUES);
            if (is_null($value)) {
                return $this->mapData(AttributePlainEnumValueCollection::class, null);
            }
            $value = $this->mapData(AttributePlainEnumValueCollection::class, $value);
            $this->values = $value;
        }
        return $this->values;
    }

    /**
     * @param AttributePlainEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

}
