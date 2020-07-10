<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface DateTimeSetAttribute extends Attribute
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|DateTimeImmutableCollection
     */
    public function getValue();

    public function setValue(?DateTimeImmutableCollection $value): void;
}
