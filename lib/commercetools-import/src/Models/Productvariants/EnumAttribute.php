<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Import\Models\Common\EnumValue;

interface EnumAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|EnumValue
     */
    public function getValue();

    public function setValue(?EnumValue $value): void;
}
