<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface TypeAddLocalizedEnumValueAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @return CustomFieldLocalizedEnumValue
     */
    public function getValue();

    /**
     * @param string $fieldName
     * @return $this
     */
    public function setFieldName(string $fieldName);

    /**
     * @param CustomFieldLocalizedEnumValue $value
     * @return $this
     */
    public function setValue(CustomFieldLocalizedEnumValue $value);

}
