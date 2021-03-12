<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddEnumValueAction extends Action
{

    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addEnumValue</code> on types</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * <p>The name of the field/attribute definition updated.</p>
     *
     * @return null|string
     */
    public function getFieldName();

    /**
     * @return null|EnumValue
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
     * @param ?EnumValue $nextValue
     */
    public function setNextValue(?EnumValue $nextValue): void;
}
