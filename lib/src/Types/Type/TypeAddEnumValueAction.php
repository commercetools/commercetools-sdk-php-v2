<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface TypeAddEnumValueAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @return CustomFieldEnumValue
     */
    public function getValue();

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName);

    /**
     * @param CustomFieldEnumValue $value
     * @return $this
     */
    public function setValue(CustomFieldEnumValue $value);

}
