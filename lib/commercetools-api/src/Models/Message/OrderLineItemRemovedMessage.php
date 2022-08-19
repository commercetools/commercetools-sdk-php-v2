<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderLineItemRemovedMessage extends OrderMessage
{
    public const FIELD_LINE_ITEM_ID = 'lineItemId';
    public const FIELD_REMOVED_QUANTITY = 'removedQuantity';
    public const FIELD_NEW_QUANTITY = 'newQuantity';
    public const FIELD_NEW_STATE = 'newState';
    public const FIELD_NEW_TOTAL_PRICE = 'newTotalPrice';
    public const FIELD_NEW_TAXED_PRICE = 'newTaxedPrice';
    public const FIELD_NEW_PRICE = 'newPrice';
    public const FIELD_NEW_SHIPPING_DETAIL = 'newShippingDetail';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId();

    /**
     * <p>Quantity of <a href="ctp:api:type:LineItem">Line Items</a> that were removed during the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|int
     */
    public function getRemovedQuantity();

    /**
     * <p><a href="ctp:api:type:LineItem">Line Item</a> quantity after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|int
     */
    public function getNewQuantity();

    /**
     * <p><a href="ctp:api:type:ItemState">ItemStates</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getNewState();

    /**
     * <p><code>totalPrice</code> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getNewTotalPrice();

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice();

    /**
     * <p><a href="ctp:api:type:Price">Price</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|Price
     */
    public function getNewPrice();

    /**
     * <p><a href="ctp:api:type:ItemShippingDetails">Shipping Details</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getNewShippingDetail();

    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void;

    /**
     * @param ?int $removedQuantity
     */
    public function setRemovedQuantity(?int $removedQuantity): void;

    /**
     * @param ?int $newQuantity
     */
    public function setNewQuantity(?int $newQuantity): void;

    /**
     * @param ?ItemStateCollection $newState
     */
    public function setNewState(?ItemStateCollection $newState): void;

    /**
     * @param ?CentPrecisionMoney $newTotalPrice
     */
    public function setNewTotalPrice(?CentPrecisionMoney $newTotalPrice): void;

    /**
     * @param ?TaxedItemPrice $newTaxedPrice
     */
    public function setNewTaxedPrice(?TaxedItemPrice $newTaxedPrice): void;

    /**
     * @param ?Price $newPrice
     */
    public function setNewPrice(?Price $newPrice): void;

    /**
     * @param ?ItemShippingDetails $newShippingDetail
     */
    public function setNewShippingDetail(?ItemShippingDetails $newShippingDetail): void;
}
