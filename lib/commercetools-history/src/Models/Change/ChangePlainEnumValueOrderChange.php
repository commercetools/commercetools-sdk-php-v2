<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\ChangeValue\EnumValueCollection;

interface ChangePlainEnumValueOrderChange extends Change
{

    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changePlainEnumValueOrder</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * <p>The name of the attribute updated.</p>
     *
     * @return null|string
     */
    public function getAttributeName();

    /**
     * @return null|EnumValueCollection
     */
    public function getNextValue();

    /**
     * @return null|EnumValueCollection
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;

    /**
     * @param ?EnumValueCollection $nextValue
     */
    public function setNextValue(?EnumValueCollection $nextValue): void;

    /**
     * @param ?EnumValueCollection $previousValue
     */
    public function setPreviousValue(?EnumValueCollection $previousValue): void;
}
