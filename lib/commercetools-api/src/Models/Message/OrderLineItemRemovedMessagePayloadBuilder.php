<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ItemShippingDetails;
use Commercetools\Api\Models\Cart\ItemShippingDetailsBuilder;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceBuilder;
use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyBuilder;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderLineItemRemovedMessagePayload>
 */
final class OrderLineItemRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?string
     */
    private $lineItemKey;

    /**

     * @var ?int
     */
    private $removedQuantity;

    /**

     * @var ?int
     */
    private $newQuantity;

    /**

     * @var ?ItemStateCollection
     */
    private $newState;

    /**

     * @var null|CentPrecisionMoney|CentPrecisionMoneyBuilder
     */
    private $newTotalPrice;

    /**

     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $newTaxedPrice;

    /**

     * @var null|Price|PriceBuilder
     */
    private $newPrice;

    /**

     * @var null|ItemShippingDetails|ItemShippingDetailsBuilder
     */
    private $newShippingDetail;

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p>User-defined unique identifier of the LineItem.</p>
     *

     * @return null|string
     */
    public function getLineItemKey()
    {
        return $this->lineItemKey;
    }

    /**
     * <p>Quantity of <a href="ctp:api:type:LineItem">Line Items</a> that were removed during the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|int
     */
    public function getRemovedQuantity()
    {
        return $this->removedQuantity;
    }

    /**
     * <p><a href="ctp:api:type:LineItem">Line Item</a> quantity after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|int
     */
    public function getNewQuantity()
    {
        return $this->newQuantity;
    }

    /**
     * <p><a href="ctp:api:type:ItemState">ItemStates</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getNewState()
    {
        return $this->newState;
    }

    /**
     * <p><code>totalPrice</code> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|CentPrecisionMoney
     */
    public function getNewTotalPrice()
    {
        return $this->newTotalPrice instanceof CentPrecisionMoneyBuilder ? $this->newTotalPrice->build() : $this->newTotalPrice;
    }

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice()
    {
        return $this->newTaxedPrice instanceof TaxedItemPriceBuilder ? $this->newTaxedPrice->build() : $this->newTaxedPrice;
    }

    /**
     * <p><a href="ctp:api:type:Price">Price</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|Price
     */
    public function getNewPrice()
    {
        return $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice;
    }

    /**
     * <p><a href="ctp:api:type:ItemShippingDetails">Shipping Details</a> of the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:StagedOrderRemoveLineItemAction">Remove Line Item</a> update action.</p>
     *

     * @return null|ItemShippingDetails
     */
    public function getNewShippingDetail()
    {
        return $this->newShippingDetail instanceof ItemShippingDetailsBuilder ? $this->newShippingDetail->build() : $this->newShippingDetail;
    }

    /**
     * @param ?string $lineItemId
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @param ?string $lineItemKey
     * @return $this
     */
    public function withLineItemKey(?string $lineItemKey)
    {
        $this->lineItemKey = $lineItemKey;

        return $this;
    }

    /**
     * @param ?int $removedQuantity
     * @return $this
     */
    public function withRemovedQuantity(?int $removedQuantity)
    {
        $this->removedQuantity = $removedQuantity;

        return $this;
    }

    /**
     * @param ?int $newQuantity
     * @return $this
     */
    public function withNewQuantity(?int $newQuantity)
    {
        $this->newQuantity = $newQuantity;

        return $this;
    }

    /**
     * @param ?ItemStateCollection $newState
     * @return $this
     */
    public function withNewState(?ItemStateCollection $newState)
    {
        $this->newState = $newState;

        return $this;
    }

    /**
     * @param ?CentPrecisionMoney $newTotalPrice
     * @return $this
     */
    public function withNewTotalPrice(?CentPrecisionMoney $newTotalPrice)
    {
        $this->newTotalPrice = $newTotalPrice;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $newTaxedPrice
     * @return $this
     */
    public function withNewTaxedPrice(?TaxedItemPrice $newTaxedPrice)
    {
        $this->newTaxedPrice = $newTaxedPrice;

        return $this;
    }

    /**
     * @param ?Price $newPrice
     * @return $this
     */
    public function withNewPrice(?Price $newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * @param ?ItemShippingDetails $newShippingDetail
     * @return $this
     */
    public function withNewShippingDetail(?ItemShippingDetails $newShippingDetail)
    {
        $this->newShippingDetail = $newShippingDetail;

        return $this;
    }

    /**
     * @deprecated use withNewTotalPrice() instead
     * @return $this
     */
    public function withNewTotalPriceBuilder(?CentPrecisionMoneyBuilder $newTotalPrice)
    {
        $this->newTotalPrice = $newTotalPrice;

        return $this;
    }

    /**
     * @deprecated use withNewTaxedPrice() instead
     * @return $this
     */
    public function withNewTaxedPriceBuilder(?TaxedItemPriceBuilder $newTaxedPrice)
    {
        $this->newTaxedPrice = $newTaxedPrice;

        return $this;
    }

    /**
     * @deprecated use withNewPrice() instead
     * @return $this
     */
    public function withNewPriceBuilder(?PriceBuilder $newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * @deprecated use withNewShippingDetail() instead
     * @return $this
     */
    public function withNewShippingDetailBuilder(?ItemShippingDetailsBuilder $newShippingDetail)
    {
        $this->newShippingDetail = $newShippingDetail;

        return $this;
    }

    public function build(): OrderLineItemRemovedMessagePayload
    {
        return new OrderLineItemRemovedMessagePayloadModel(
            $this->lineItemId,
            $this->lineItemKey,
            $this->removedQuantity,
            $this->newQuantity,
            $this->newState,
            $this->newTotalPrice instanceof CentPrecisionMoneyBuilder ? $this->newTotalPrice->build() : $this->newTotalPrice,
            $this->newTaxedPrice instanceof TaxedItemPriceBuilder ? $this->newTaxedPrice->build() : $this->newTaxedPrice,
            $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice,
            $this->newShippingDetail instanceof ItemShippingDetailsBuilder ? $this->newShippingDetail->build() : $this->newShippingDetail
        );
    }

    public static function of(): OrderLineItemRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
