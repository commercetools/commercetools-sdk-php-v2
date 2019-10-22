<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;

interface TimeSetAttribute extends Attribute
{
    const FIELD_VALUE = 'value';

    /**
     * @return null|DateTimeImmutableCollection
     */
    public function getValue();

    public function setValue(?DateTimeImmutableCollection $value): void;
}
