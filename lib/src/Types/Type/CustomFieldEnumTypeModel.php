<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\FieldTypeModel;

class CustomFieldEnumTypeModel extends FieldTypeModel implements CustomFieldEnumType
{
    const DISCRIMINATOR_VALUE = 'Enum';

    /**
     * @var CustomFieldEnumValueCollection
     */
    protected $values;

    /**
     * @return CustomFieldEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            $value = $this->raw(CustomFieldEnumType::FIELD_VALUES);
            if (is_null($value)) {
                return $this->mapData(CustomFieldEnumValueCollection::class, null);
            }
            $value = $this->mapData(CustomFieldEnumValueCollection::class, $value);
            $this->values = $value;
        }
        return $this->values;
    }

    /**
     * @param CustomFieldEnumValueCollection $values
     * @return $this
     */
    public function setValues(CustomFieldEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

}
