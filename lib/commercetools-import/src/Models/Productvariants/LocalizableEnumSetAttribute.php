<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LocalizableEnumSetAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>A set of localized enum values, each represented by its key.
     * Each key must match the key of an <a href="ctp:api:type:AttributeLocalizedEnumValue">AttributeLocalizedEnumValue</a> in the Product Type.</p>
     *

     * @return null|array
     */
    public function getValue();

    /**
     * @param ?array $value
     */
    public function setValue(?array $value): void;
}
