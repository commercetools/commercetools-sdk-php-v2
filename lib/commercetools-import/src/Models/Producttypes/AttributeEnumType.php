<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;

interface AttributeEnumType extends AttributeType
{

    public const FIELD_VALUES = 'values';

    /**
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues();

    public function setValues(?AttributePlainEnumValueCollection $values): void;
}
