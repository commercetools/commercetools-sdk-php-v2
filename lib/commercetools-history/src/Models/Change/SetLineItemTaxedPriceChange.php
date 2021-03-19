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
use Commercetools\History\Models\Common\TaxedItemPrice;

interface SetLineItemTaxedPriceChange extends Change
{

    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>setLineItemTaxedPrice</code></p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|TaxedItemPrice
     */
    public function getNextValue();

    /**
     * @return null|TaxedItemPrice
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?TaxedItemPrice $nextValue
     */
    public function setNextValue(?TaxedItemPrice $nextValue): void;

    /**
     * @param ?TaxedItemPrice $previousValue
     */
    public function setPreviousValue(?TaxedItemPrice $previousValue): void;
}
