<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeAddEnumValueAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_VALUE = 'value';

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">Field Definition</a> to update.</p>
     *
     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>Value to append to the array.</p>
     *
     * @return null|CustomFieldEnumValue
     */
    public function getValue();

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?CustomFieldEnumValue $value
     */
    public function setValue(?CustomFieldEnumValue $value): void;
}
