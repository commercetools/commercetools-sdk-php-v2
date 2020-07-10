<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface AttributeLocalizedEnumType extends AttributeType
{

    public const FIELD_VALUES = 'values';

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues();

    public function setValues(?AttributeLocalizedEnumValueCollection $values): void;
}
