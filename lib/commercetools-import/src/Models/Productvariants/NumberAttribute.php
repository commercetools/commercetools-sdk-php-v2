<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

interface NumberAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getValue();

    public function setValue(?int $value): void;
}
