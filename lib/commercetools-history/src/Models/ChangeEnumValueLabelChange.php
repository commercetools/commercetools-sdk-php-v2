<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeEnumValueLabelChange extends Change
{

    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_VALUE_KEY = 'valueKey';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeEnumValueLabel</code> on types</p>
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
     * <p>Key of the values that was updated</p>
     *
     * @return null|string
     */
    public function getValueKey();

    /**
     * @return null|string
     */
    public function getPreviousValue();

    /**
     * @return null|string
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
     * @param ?string $valueKey
     */
    public function setValueKey(?string $valueKey): void;

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void;

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void;
}
