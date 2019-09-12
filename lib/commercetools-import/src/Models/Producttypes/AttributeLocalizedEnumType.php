<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

interface AttributeLocalizedEnumType extends AttributeType
{
    const FIELD_VALUES = 'values';

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}
