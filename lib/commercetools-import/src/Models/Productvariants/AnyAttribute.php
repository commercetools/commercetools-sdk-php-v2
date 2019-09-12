<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\JsonObject;

interface AnyAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setValue(?JsonObject $value): void;
}
