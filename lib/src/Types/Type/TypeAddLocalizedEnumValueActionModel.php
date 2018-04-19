<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\TypeUpdateActionModel;

class TypeAddLocalizedEnumValueActionModel extends TypeUpdateActionModel implements TypeAddLocalizedEnumValueAction
{
    const DISCRIMINATOR_VALUE = 'addLocalizedEnumValue';

    /**
     * @var string
     */
    protected $fieldName;
    /**
     * @var CustomFieldLocalizedEnumValue
     */
    protected $value;

    /**
     * @return string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            $value = $this->raw(TypeAddLocalizedEnumValueAction::FIELD_FIELD_NAME);
            $value = (string)$value;
            $this->fieldName = $value;
        }
        return $this->fieldName;
    }
    /**
     * @return CustomFieldLocalizedEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(TypeAddLocalizedEnumValueAction::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(CustomFieldLocalizedEnumValue::class, null);
            }
            $value = $this->mapData(CustomFieldLocalizedEnumValue::class, $value);

            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName)
    {
        $this->fieldName = (string)$fieldName;

        return $this;
    }
    /**
     * @param CustomFieldLocalizedEnumValue $value
     * @return $this
     */
    public function setValue(CustomFieldLocalizedEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

}
