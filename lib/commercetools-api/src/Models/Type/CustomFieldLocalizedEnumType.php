<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

interface CustomFieldLocalizedEnumType extends FieldType
{
    const FIELD_VALUES = 'values';

    /**
     * @return null|CustomFieldLocalizedEnumValueCollection
     */
    public function getValues();

    public function setValues(?CustomFieldLocalizedEnumValueCollection $values): void;
}
