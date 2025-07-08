<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface EnumField extends CustomField
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>The key of the enum value.
     * Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldEnumValue">CustomFieldEnumValues</a> defined in the <a href="ctp:api:type:CustomFieldEnumType">CustomFieldEnumType</a>.</p>
     *

     * @return null|string
     */
    public function getValue();

    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void;
}
