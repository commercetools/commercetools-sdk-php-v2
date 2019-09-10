<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

interface TypeChangeLocalizedEnumValueLabelAction extends TypeUpdateAction
{
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getFieldName();

    /**
     * @return null|CustomFieldLocalizedEnumValue
     */
    public function getValue();

    public function setFieldName(?string $fieldName): void;

    public function setValue(?CustomFieldLocalizedEnumValue $value): void;
}
