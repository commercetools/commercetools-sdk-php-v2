<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

interface CustomFieldLocalizedEnumType extends FieldType {
    const FIELD_VALUES = 'values';

    /**
     * @return CustomFieldLocalizedEnumValueCollection
     */
    public function getValues();

    /**
     * @param CustomFieldLocalizedEnumValueCollection $values
     * @return $this
     */
    public function setValues(CustomFieldLocalizedEnumValueCollection $values);

}
