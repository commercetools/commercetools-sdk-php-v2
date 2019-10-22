<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

interface BooleanSetAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|array
     */
    public function getValue();

    public function setValue(?array $value): void;
}
