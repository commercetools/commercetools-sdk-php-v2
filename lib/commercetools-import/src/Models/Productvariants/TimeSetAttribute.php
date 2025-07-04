<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TimeSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A set of time values in the format <code>HH:mm:ss.SSS</code>.
     * The time zone is optional and defaults to UTC if not specified.
     * If the time zone is specified, it must be in the format <code>±HH:mm</code> or <code>Z</code> for UTC.</p>
     *

     * @return null|DateTimeImmutableCollection
     */
    public function getValue();

    /**
     * @param ?DateTimeImmutableCollection $value
     */
    public function setValue(?DateTimeImmutableCollection $value): void;
}
