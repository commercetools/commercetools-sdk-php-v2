<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DateTimeSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * @return null|DateTimeImmutableCollection
     */
    public function getValue();

    /**
     * @param ?DateTimeImmutableCollection $value
     */
    public function setValue(?DateTimeImmutableCollection $value): void;
}
