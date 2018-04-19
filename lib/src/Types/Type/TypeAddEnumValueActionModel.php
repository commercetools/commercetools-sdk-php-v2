<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Type\TypeUpdateActionModel;

class TypeAddEnumValueActionModel extends TypeUpdateActionModel implements TypeAddEnumValueAction
{
    const DISCRIMINATOR_VALUE = 'addEnumValue';

    /**
     * @var string
     */
    protected $fieldName;
    /**
     * @var CustomFieldEnumValue
     */
    protected $value;

    /**
     * @return string
     */
    public function getFieldName()
    {
        if (is_null($this->fieldName)) {
            $value = $this->raw(TypeAddEnumValueAction::FIELD_FIELD_NAME);
            $value = (string)$value;
            $this->fieldName = $value;
        }
        return $this->fieldName;
    }
    /**
     * @return CustomFieldEnumValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(TypeAddEnumValueAction::FIELD_VALUE);
            if (is_null($value)) {
                return $this->mapData(CustomFieldEnumValue::class, null);
            }
            $value = $this->mapData(CustomFieldEnumValue::class, $value);

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
     * @param CustomFieldEnumValue $value
     * @return $this
     */
    public function setValue(CustomFieldEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

}
