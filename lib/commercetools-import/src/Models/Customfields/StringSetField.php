<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StringSetField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>JSON array of strings.
     * The order of items in the array is not fixed.</p>
     *

     * @return null|array
     */
    public function getValue();

    /**
     * @param ?array $value
     */
    public function setValue(?array $value): void;
}
