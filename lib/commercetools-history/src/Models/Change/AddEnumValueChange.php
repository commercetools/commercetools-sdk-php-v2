<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\EnumValue;

interface AddEnumValueChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_FIELD_NAME = 'fieldName';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|EnumValue
     */
    public function getNextValue();

    /**
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getFieldName();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?EnumValue $nextValue
     */
    public function setNextValue(?EnumValue $nextValue): void;

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;
}
