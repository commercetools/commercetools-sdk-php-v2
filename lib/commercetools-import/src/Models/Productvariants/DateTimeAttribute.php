<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DateTimeAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A date with time in the format <code>YYYY-MM-DDTHH:mm:ss.SSSZ</code>.
     * The time zone is optional and defaults to UTC if not specified.
     * If the time zone is specified, it must be in the format <code>±HH:mm</code> or <code>Z</code> for UTC.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValue();

    /**
     * @param ?DateTimeImmutable $value
     */
    public function setValue(?DateTimeImmutable $value): void;
}
