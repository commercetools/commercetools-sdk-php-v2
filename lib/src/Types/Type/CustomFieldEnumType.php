<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface CustomFieldEnumType extends FieldType
{
    const FIELD_VALUES = 'values';

    /**
     * @return CustomFieldEnumValueCollection
     */
    public function getValues();

    /**
     * @param CustomFieldEnumValueCollection $values
     * @return $this
     */
    public function setValues(CustomFieldEnumValueCollection $values);

}
