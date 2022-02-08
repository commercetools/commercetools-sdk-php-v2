<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\TypedMoney;
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
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|int
     */
    public function getRemovedQuantity();

    /**
     * @return null|int
     */
    public function getNewQuantity();

    /**
     * @return null|ItemStateCollection
     */
    public function getNewState();

    /**
     * @return null|TypedMoney
     */
    public function getNewTotalPrice();

    /**
     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice();

    /**
     * @return null|Price
     */
    public function getNewPrice();

    /**
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
     * @param ?TypedMoney $newTotalPrice
     */
    public function setNewTotalPrice(?TypedMoney $newTotalPrice): void;

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
