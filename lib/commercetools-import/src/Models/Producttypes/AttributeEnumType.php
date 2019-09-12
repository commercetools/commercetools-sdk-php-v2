<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

interface AttributeEnumType extends AttributeType
{
    const FIELD_VALUES = 'values';

    /**
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues();

    public function setValues(?AttributePlainEnumValueCollection $values): void;
}
