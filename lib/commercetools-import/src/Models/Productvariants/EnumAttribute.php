<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface EnumAttribute extends Attribute
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>The key of the enum value.
     * Must match the key of an <a href="ctp:api:type:AttributePlainEnumValue">AttributePlainEnumValue</a> in the Product Type.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;
}
