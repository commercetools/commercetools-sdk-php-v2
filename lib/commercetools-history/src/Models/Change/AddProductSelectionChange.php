<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ProductSelectionSetting;

interface AddProductSelectionChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|ProductSelectionSetting
     */
    public function getPreviousValue();

    /**

     * @return null|ProductSelectionSetting
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ProductSelectionSetting $previousValue
     */
    public function setPreviousValue(?ProductSelectionSetting $previousValue): void;

    /**
     * @param ?ProductSelectionSetting $nextValue
     */
    public function setNextValue(?ProductSelectionSetting $nextValue): void;
}
