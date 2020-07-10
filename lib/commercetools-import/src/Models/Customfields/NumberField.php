<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface NumberField extends CustomField
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|int
     */
    public function getValue();

    public function setValue(?int $value): void;
}
