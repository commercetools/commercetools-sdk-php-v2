<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface SetCustomLineItemTotalPriceChange extends Change
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
     * <p>Update action for <code>setCustomLineItemTotalPrice</code></p>
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
     * @return null|Money
     */
    public function getNextValue();

    /**
     * @return null|Money
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
     * @param ?Money $nextValue
     */
    public function setNextValue(?Money $nextValue): void;

    /**
     * @param ?Money $previousValue
     */
    public function setPreviousValue(?Money $previousValue): void;
}
