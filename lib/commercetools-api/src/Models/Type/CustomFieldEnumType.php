<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\JsonObject;

interface CustomFieldEnumType extends FieldType
{
    
    const FIELD_VALUES = 'values';

    /**
     *
     * @return CustomFieldEnumValueCollection|null
     */
    public function getValues();
    public function setValues(?CustomFieldEnumValueCollection $values): void;
}