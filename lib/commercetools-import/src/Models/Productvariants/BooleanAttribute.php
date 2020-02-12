<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BooleanAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * @return null|bool
     */
    public function getValue();

    public function setValue(?bool $value): void;
}
