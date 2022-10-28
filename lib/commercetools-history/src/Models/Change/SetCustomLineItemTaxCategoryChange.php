<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\Reference;

interface SetCustomLineItemTaxCategoryChange extends Change
{

    public const FIELD_CUSTOM_LINE_ITEM = 'customLineItem';
    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**

     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setCustomLineItemTaxCategory</code></p>
     *

     * @return null|string
     */
    public function getChange();

    /**

     * @return null|LocalizedString
     */
    public function getCustomLineItem();

    /**

     * @return null|string
     */
    public function getCustomLineItemId();

    /**

     * @return null|Reference
     */
    public function getNextValue();

    /**

     * @return null|Reference
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?LocalizedString $customLineItem
     */
    public function setCustomLineItem(?LocalizedString $customLineItem): void;

    /**
     * @param ?string $customLineItemId
     */
    public function setCustomLineItemId(?string $customLineItemId): void;

    /**
     * @param ?Reference $nextValue
     */
    public function setNextValue(?Reference $nextValue): void;

    /**
     * @param ?Reference $previousValue
     */
    public function setPreviousValue(?Reference $previousValue): void;
}
