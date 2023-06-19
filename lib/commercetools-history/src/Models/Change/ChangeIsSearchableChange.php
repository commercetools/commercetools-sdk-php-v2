<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeIsSearchableChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_ATTRIBUTE_NAME = 'attributeName';

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

     * @return null|bool
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|bool
     */
    public function getNextValue();

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getAttributeName();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?bool $previousValue
     */
    public function setPreviousValue(?bool $previousValue): void;

    /**
     * @param ?bool $nextValue
     */
    public function setNextValue(?bool $nextValue): void;

    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void;
}
