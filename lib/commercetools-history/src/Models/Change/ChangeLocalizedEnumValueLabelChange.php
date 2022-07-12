<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface ChangeLocalizedEnumValueLabelChange extends Change
{

    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_VALUE_KEY = 'valueKey';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeLocalizedEnumValueLabel</code> on types</p>
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
     * <p>Key of the values that was updated</p>
     *

     * @return null|string
     */
    public function getValueKey();

    /**

     * @return null|LocalizedString
     */
    public function getPreviousValue();

    /**

     * @return null|LocalizedString
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
     * @param ?string $valueKey
     */
    public function setValueKey(?string $valueKey): void;

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void;

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void;
}
