<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\ItemShippingDetailsModel;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceModel;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyModel;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceModel;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderLineItemRemovedMessagePayloadModel extends JsonObjectModel implements OrderLineItemRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderLineItemRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $lineItemId;

    /**
     *
     * @var ?int
     */
    protected $removedQuantity;

    /**
     *
     * @var ?int
     */
    protected $newQuantity;

    /**
     *
     * @var ?ItemStateCollection
     */
    protected $newState;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $newTotalPrice;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $newTaxedPrice;

    /**
     *
     * @var ?Price
     */
    protected $newPrice;

    /**
     *
     * @var ?ItemShippingDetails
     */
    protected $newShippingDetail;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?int $removedQuantity = null,
        ?int $newQuantity = null,
        ?ItemStateCollection $newState = null,
        ?CentPrecisionMoney $newTotalPrice = null,
        ?TaxedItemPrice $newTaxedPrice = null,
        ?Price $newPrice = null,
        ?ItemShippingDetails $newShippingDetail = null,
        ?string $type = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->removedQuantity = $removedQuantity;
        $this->newQuantity = $newQuantity;
        $this->newState = $newState;
        $this->newTotalPrice = $newTotalPrice;
        $this->newTaxedPrice = $newTaxedPrice;
        $this->newPrice = $newPrice;
        $this->newShippingDetail = $newShippingDetail;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *
     *
     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p>Quantity of <a href="ctp:api:type:LineItem">Line Items</a> that were removed during the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|int
     */
    public function getRemovedQuantity()
    {
        if (is_null($this->removedQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_REMOVED_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->removedQuantity = (int) $data;
        }

        return $this->removedQuantity;
    }

    /**
     * <p><a href="ctp:api:type:LineItem">Line Item</a> quantity after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|int
     */
    public function getNewQuantity()
    {
        if (is_null($this->newQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NEW_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->newQuantity = (int) $data;
        }

        return $this->newQuantity;
    }

    /**
     * <p><a href="ctp:api:type:ItemState">ItemStates</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|ItemStateCollection
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->newState = ItemStateCollection::fromArray($data);
        }

        return $this->newState;
    }

    /**
     * <p><code>totalPrice</code> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getNewTotalPrice()
    {
        if (is_null($this->newTotalPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_TOTAL_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newTotalPrice = CentPrecisionMoneyModel::of($data);
        }

        return $this->newTotalPrice;
    }

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice()
    {
        if (is_null($this->newTaxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newTaxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->newTaxedPrice;
    }

    /**
     * <p><a href="ctp:api:type:Price">Price</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|Price
     */
    public function getNewPrice()
    {
        if (is_null($this->newPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->newPrice = PriceModel::of($data);
        }

        return $this->newPrice;
    }

    /**
     * <p><a href="ctp:api:type:ItemShippingDetails">Shipping Details</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *
     *
     * @return null|ItemShippingDetails
     */
    public function getNewShippingDetail()
    {
        if (is_null($this->newShippingDetail)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_SHIPPING_DETAIL);
            if (is_null($data)) {
                return null;
            }

            $this->newShippingDetail = ItemShippingDetailsModel::of($data);
        }

        return $this->newShippingDetail;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?int $removedQuantity
     */
    public function setRemovedQuantity(?int $removedQuantity): void
    {
        $this->removedQuantity = $removedQuantity;
    }

    /**
     * @param ?int $newQuantity
     */
    public function setNewQuantity(?int $newQuantity): void
    {
        $this->newQuantity = $newQuantity;
    }

    /**
     * @param ?ItemStateCollection $newState
     */
    public function setNewState(?ItemStateCollection $newState): void
    {
        $this->newState = $newState;
    }

    /**
     * @param ?CentPrecisionMoney $newTotalPrice
     */
    public function setNewTotalPrice(?CentPrecisionMoney $newTotalPrice): void
    {
        $this->newTotalPrice = $newTotalPrice;
    }

    /**
     * @param ?TaxedItemPrice $newTaxedPrice
     */
    public function setNewTaxedPrice(?TaxedItemPrice $newTaxedPrice): void
    {
        $this->newTaxedPrice = $newTaxedPrice;
    }

    /**
     * @param ?Price $newPrice
     */
    public function setNewPrice(?Price $newPrice): void
    {
        $this->newPrice = $newPrice;
    }

    /**
     * @param ?ItemShippingDetails $newShippingDetail
     */
    public function setNewShippingDetail(?ItemShippingDetails $newShippingDetail): void
    {
        $this->newShippingDetail = $newShippingDetail;
    }
}
