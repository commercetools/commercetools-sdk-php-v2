<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceBuilder;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderRemoveLineItemAction>
 */
final class StagedOrderRemoveLineItemActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lineItemId;

    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $externalPrice;

    /**

     * @var null|ExternalLineItemTotalPrice|ExternalLineItemTotalPriceBuilder
     */
    private $externalTotalPrice;

    /**

     * @var null|ItemShippingDetailsDraft|ItemShippingDetailsDraftBuilder
     */
    private $shippingDetailsToRemove;

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
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *

     * @return null|Money
     */
    public function getExternalPrice()
    {
        return $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice;
    }

    /**

     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        return $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice;
    }

    /**

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetailsToRemove()
    {
        return $this->shippingDetailsToRemove instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetailsToRemove->build() : $this->shippingDetailsToRemove;
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
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param ?Money $externalPrice
     * @return $this
     */
    public function withExternalPrice(?Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @param ?ExternalLineItemTotalPrice $externalTotalPrice
     * @return $this
     */
    public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetailsToRemove
     * @return $this
     */
    public function withShippingDetailsToRemove(?ItemShippingDetailsDraft $shippingDetailsToRemove)
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;

        return $this;
    }

    /**
     * @deprecated use withExternalPrice() instead
     * @return $this
     */
    public function withExternalPriceBuilder(?MoneyBuilder $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @deprecated use withExternalTotalPrice() instead
     * @return $this
     */
    public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    /**
     * @deprecated use withShippingDetailsToRemove() instead
     * @return $this
     */
    public function withShippingDetailsToRemoveBuilder(?ItemShippingDetailsDraftBuilder $shippingDetailsToRemove)
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;

        return $this;
    }

    public function build(): StagedOrderRemoveLineItemAction
    {
        return new StagedOrderRemoveLineItemActionModel(
            $this->lineItemId,
            $this->quantity,
            $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice,
            $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice,
            $this->shippingDetailsToRemove instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetailsToRemove->build() : $this->shippingDetailsToRemove
        );
    }

    public static function of(): StagedOrderRemoveLineItemActionBuilder
    {
        return new self();
    }
}
