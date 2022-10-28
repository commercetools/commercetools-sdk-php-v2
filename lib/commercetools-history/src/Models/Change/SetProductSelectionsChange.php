<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ProductSelectionSettingCollection;

interface SetProductSelectionsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setProductSelections</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getPreviousValue();

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ProductSelectionSettingCollection $previousValue
     */
    public function setPreviousValue(?ProductSelectionSettingCollection $previousValue): void;

    /**
     * @param ?ProductSelectionSettingCollection $nextValue
     */
    public function setNextValue(?ProductSelectionSettingCollection $nextValue): void;
}
