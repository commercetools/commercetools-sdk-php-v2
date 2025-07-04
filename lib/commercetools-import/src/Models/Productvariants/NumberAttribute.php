<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface NumberAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A number value.
     * Can be an integer or a floating-point number.</p>
     *

     * @return null|float
     */
    public function getValue();

    /**
     * @param ?float $value
     */
    public function setValue(?float $value): void;
}
