<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DateSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A set of dates in the format <code>YYYY-MM-DD</code>.</p>
     *

     * @return null|DateTimeImmutableCollection
     */
    public function getValue();

    /**
     * @param ?DateTimeImmutableCollection $value
     */
    public function setValue(?DateTimeImmutableCollection $value): void;
}
