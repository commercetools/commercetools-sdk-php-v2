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
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
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
     * @var null|TypedMoney|TypedMoneyBuilder
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
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|int
     */
    public function getRemovedQuantity()
    {
        return $this->removedQuantity;
    }

    /**
     * @return null|int
     */
    public function getNewQuantity()
    {
        return $this->newQuantity;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getNewState()
    {
        return $this->newState;
    }

    /**
     * @return null|TypedMoney
     */
    public function getNewTotalPrice()
    {
        return $this->newTotalPrice instanceof TypedMoneyBuilder ? $this->newTotalPrice->build() : $this->newTotalPrice;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getNewTaxedPrice()
    {
        return $this->newTaxedPrice instanceof TaxedItemPriceBuilder ? $this->newTaxedPrice->build() : $this->newTaxedPrice;
    }

    /**
     * @return null|Price
     */
    public function getNewPrice()
    {
        return $this->newPrice instanceof PriceBuilder ? $this->newPrice->build() : $this->newPrice;
    }

    /**
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
     * @param ?TypedMoney $newTotalPrice
     * @return $this
     */
    public function withNewTotalPrice(?TypedMoney $newTotalPrice)
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
    public function withNewTotalPriceBuilder(?TypedMoneyBuilder $newTotalPrice)
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
            $this->removedQuantity,
            $this->newQuantity,
            $this->newState,
            $this->newTotalPrice instanceof TypedMoneyBuilder ? $this->newTotalPrice->build() : $this->newTotalPrice,
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
