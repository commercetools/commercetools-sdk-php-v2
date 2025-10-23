<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\ItemShippingDetails;
use Commercetools\History\Models\Common\LocalizedString;

interface SetLineItemShippingDetailsChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_LINE_ITEM = 'lineItem';
    public const FIELD_VARIANT = 'variant';

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

     * @return null|ItemShippingDetails
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getNextValue();

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:LineItem">LineItem</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a> the updated Line Item is based on.</p>
     *

     * @return null|LocalizedString
     */
    public function getLineItem();

    /**
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?ItemShippingDetails $previousValue
     */
    public function setPreviousValue(?ItemShippingDetails $previousValue): void;

    /**
     * @param ?ItemShippingDetails $nextValue
     */
    public function setNextValue(?ItemShippingDetails $nextValue): void;

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?LocalizedString $lineItem
     */
    public function setLineItem(?LocalizedString $lineItem): void;

    /**
     * @param ?string $variant
     */
    public function setVariant(?string $variant): void;
}
