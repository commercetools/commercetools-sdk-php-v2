<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\ProductType\AttributeTypeModel;

class AttributeLocalizedEnumTypeModel extends AttributeTypeModel implements AttributeLocalizedEnumType {
    const DISCRIMINATOR_VALUE = 'lenum';

    /**
     * @var AttributeLocalizedEnumValueCollection
     */
    protected $values;

    /**
     * @return AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            $value = $this->raw(AttributeLocalizedEnumType::FIELD_VALUES);
            if (is_null($value)) {
                return $this->mapData(AttributeLocalizedEnumValueCollection::class, null);
            }
            $value = $this->mapData(AttributeLocalizedEnumValueCollection::class, $value);
            $this->values = $value;
        }
        return $this->values;
    }

    /**
     * @param AttributeLocalizedEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributeLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

}
