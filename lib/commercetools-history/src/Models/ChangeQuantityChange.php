<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeQuantityChange extends Change
{

    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|InventoryQuantityValue
     */
    public function getNextValue();

    /**
     * @return null|InventoryQuantityValue
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?InventoryQuantityValue $nextValue
     */
    public function setNextValue(?InventoryQuantityValue $nextValue): void;

    /**
     * @param ?InventoryQuantityValue $previousValue
     */
    public function setPreviousValue(?InventoryQuantityValue $previousValue): void;
}
