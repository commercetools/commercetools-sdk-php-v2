<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeChangeEnumValueLabelAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_VALUE = 'value';

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to update.</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>New value to set.
     * Must not be empty.</p>
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
