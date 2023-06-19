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

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_VALUE_KEY = 'valueKey';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|LocalizedString
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|LocalizedString
     */
    public function getNextValue();

    /**
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>; only present on changes to Types.</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>; only present on changes to Product Types.</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**
     * <p>Key of the updated values.</p>
     *

     * @return null|string
     */
    public function getValueKey();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void;

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void;

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
}
