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

interface DateAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A date in the format <code>YYYY-MM-DD</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValue();

    /**
     * @param ?DateTimeImmutable $value
     */
    public function setValue(?DateTimeImmutable $value): void;
}
