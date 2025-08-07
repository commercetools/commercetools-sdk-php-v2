<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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

     * @var ?string
     */
    private $lineItemKey;

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
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:LineItem">LineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *

     * @return null|string
     */
    public function getLineItemKey()
    {
        return $this->lineItemKey;
    }

    /**
     * <p>Amount to subtract from the LineItem's <code>quantity</code>.
     * If absent, the LineItem is removed from the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> to the given value when decreasing the quantity of a Line Item with the <code>ExternalPrice</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     * <p>To set the money value in high precision, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a>.</p>
     *

     * @return null|Money
     */
    public function getExternalPrice()
    {
        return $this->externalPrice instanceof MoneyBuilder ? $this->externalPrice->build() : $this->externalPrice;
    }

    /**
     * <p>Sets the <a href="ctp:api:type:LineItem">LineItem</a> <code>price</code> and <code>totalPrice</code> to the given value when decreasing the quantity of a Line Item with the <code>ExternalTotal</code> <a href="ctp:api:type:LineItemPriceMode">LineItemPriceMode</a>.</p>
     *

     * @return null|ExternalLineItemTotalPrice
     */
    public function getExternalTotalPrice()
    {
        return $this->externalTotalPrice instanceof ExternalLineItemTotalPriceBuilder ? $this->externalTotalPrice->build() : $this->externalTotalPrice;
    }

    /**
     * <p>Container for Line Item-specific addresses to remove.</p>
     *

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
     * @param ?string $lineItemKey
     * @return $this
     */
    public function withLineItemKey(?string $lineItemKey)
    {
        $this->lineItemKey = $lineItemKey;

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

    public function build(): CartRemoveLineItemAction
    {
        return new CartRemoveLineItemActionModel(
            $this->lineItemId,
            $this->lineItemKey,
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
