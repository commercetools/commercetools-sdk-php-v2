<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface NumberSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A set of number values.
     * Each value can be an integer or a floating-point number.</p>
     *

     * @return null|array
     */
    public function getValue();

    /**
     * @param ?array $value
     */
    public function setValue(?array $value): void;
}
