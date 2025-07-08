<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface LocalizedEnumField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>The key of the localized enum value.
     * Must match the key of a <a href="ctp:api:type:CustomFieldLocalizedEnumValue">CustomFieldLocalizedEnumValue</a> in the <a href="ctp:api:type:CustomFieldLocalizedEnumType">CustomFieldLocalizedEnumType</a>.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;
}
