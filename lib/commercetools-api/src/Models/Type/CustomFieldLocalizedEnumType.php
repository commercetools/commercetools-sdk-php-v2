<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface CustomFieldLocalizedEnumType extends FieldType
{
    
    const FIELD_VALUES = 'values';

    /**
     *
     * @return CustomFieldLocalizedEnumValueCollection|null
     */
    public function getValues();
    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void;
}