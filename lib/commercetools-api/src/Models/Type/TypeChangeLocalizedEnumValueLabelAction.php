<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface TypeChangeLocalizedEnumValueLabelAction extends TypeUpdateAction
{
    
    const FIELD_FIELD_NAME = 'fieldName';
    const FIELD_VALUE = 'value';

    /**
     *
     * @return string|null
     */
    public function getFieldName();
    
    /**
     *
     * @return CustomFieldLocalizedEnumValue|null
     */
    public function getValue();
    public function setFieldName(?string $fieldName): void;
    
    public function setValue(?CustomFieldLocalizedEnumValue $value): void;
}