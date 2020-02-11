<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TextSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * @return null|array
     */
    public function getValue();

    public function setValue(?array $value): void;
}
