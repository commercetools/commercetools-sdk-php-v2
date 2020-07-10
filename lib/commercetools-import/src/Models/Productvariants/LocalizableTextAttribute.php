<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\LocalizedString;

interface LocalizableTextAttribute extends Attribute
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|LocalizedString
     */
    public function getValue();

    public function setValue(?LocalizedString $value): void;
}
