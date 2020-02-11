<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;

/**
 * @implements Builder<CartRemoveLineItemAction>
 */
final class CartRemoveLineItemActionBuilder implements Builder
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
     * @return $this
     */
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalPrice(?Money $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetailsToRemove(?ItemShippingDetailsDraft $shippingDetailsToRemove)
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalPriceBuilder(?MoneyBuilder $externalPrice)
    {
        $this->externalPrice = $externalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalTotalPriceBuilder(?ExternalLineItemTotalPriceBuilder $externalTotalPrice)
    {
        $this->externalTotalPrice = $externalTotalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingDetailsToRemoveBuilder(?ItemShippingDetailsDraftBuilder $shippingDetailsToRemove)
    {
        $this->shippingDetailsToRemove = $shippingDetailsToRemove;

        return $this;
    }

    public function build(): CartRemoveLineItemAction
    {
        return new CartRemoveLineItemActionModel(
            $this->lineItemId,
            $this->quantity,
            $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice,
            $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice,
            $this->shippingDetailsToRemove instanceof ItemShippingDetailsDraftBuilder ? $this->shippingDetailsToRemove->build() : $this->shippingDetailsToRemove
        );
    }

    public static function of(): CartRemoveLineItemActionBuilder
    {
        return new self();
    }
}
