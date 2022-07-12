<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\LocalizedEnumValue;

interface AddLocalizedEnumValueChange extends Change
{

    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addLocalizedEnumValue</code> on types</p>
     *

     * @return null|string
     */
    public function getChange();

    /**
     * <p>The name of the field definition updated.</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>The name of the attribute updated.</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**

     * @return null|LocalizedEnumValue
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?LocalizedEnumValue $nextValue
     */
    public function setNextValue(?LocalizedEnumValue $nextValue): void;
}
