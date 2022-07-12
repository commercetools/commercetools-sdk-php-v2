<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\LocalizedEnumValueCollection;

interface ChangeLocalizedEnumValueOrderChange extends Change
{

    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeLocalizedEnumValueOrder</code> on types and product types</p>
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

     * @return null|LocalizedEnumValueCollection
     */
    public function getNextValue();

    /**

     * @return null|LocalizedEnumValueCollection
     */
    public function getPreviousValue();

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
     * @param ?LocalizedEnumValueCollection $nextValue
     */
    public function setNextValue(?LocalizedEnumValueCollection $nextValue): void;

    /**
     * @param ?LocalizedEnumValueCollection $previousValue
     */
    public function setPreviousValue(?LocalizedEnumValueCollection $previousValue): void;
}
