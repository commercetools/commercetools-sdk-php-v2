<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

interface CustomFieldEnumType extends FieldType
{
    const FIELD_VALUES = 'values';

    /**
     * @return null|CustomFieldEnumValueCollection
     */
    public function getValues();

    public function setValues(?CustomFieldEnumValueCollection $values): void;
}
