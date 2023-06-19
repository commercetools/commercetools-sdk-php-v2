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

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';

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

     * @return null|TaxedItemPrice
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getNextValue();

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the Line Item is based on.</p>
     *

     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:LineItem">LineItem</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?TaxedItemPrice $previousValue
     */
    public function setPreviousValue(?TaxedItemPrice $previousValue): void;

    /**
     * @param ?TaxedItemPrice $nextValue
     */
    public function setNextValue(?TaxedItemPrice $nextValue): void;

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;
}
