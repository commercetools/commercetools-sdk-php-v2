<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RemoveLocalizedEnumValuesAction extends Action
{

    public const FIELD_ATTRIBUTE_NAME = 'attributeName';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>removeEnumValues</code> on product types</p>
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
     * @return null|LocalizedEnumValue
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
     * @param ?LocalizedEnumValue $previousValue
     */
    public function setPreviousValue(?LocalizedEnumValue $previousValue): void;
}
