<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeInputHintChange extends Change
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
     * <p>Update action for <code>changeInputHint</code> on product types and types</p>
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

     * @return null|string
     */
    public function getNextValue();

    /**

     * @return null|string
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
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void;

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void;
}
