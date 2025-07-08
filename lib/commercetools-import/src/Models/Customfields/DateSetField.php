<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DateSetField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>JSON array of date values in the format <code>YYYY-MM-DD</code> without duplicates.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|DateTimeImmutableCollection
     */
    public function getValue();

    /**
     * @param ?DateTimeImmutableCollection $value
     */
    public function setValue(?DateTimeImmutableCollection $value): void;
}
