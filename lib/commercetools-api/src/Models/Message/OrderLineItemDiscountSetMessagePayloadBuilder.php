<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
use Commercetools\Api\Models\Cart\MethodTaxedPriceCollection;
use Commercetools\Api\Models\Cart\TaxedItemPrice;
use Commercetools\Api\Models\Cart\TaxedItemPriceBuilder;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderLineItemDiscountSetMessagePayload>
 */
final class OrderLineItemDiscountSetMessagePayloadBuilder implements Builder
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

     * @var ?DiscountedLineItemPriceForQuantityCollection
     */
    private $discountedPricePerQuantity;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalPrice;

    /**

     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $taxedPrice;

    /**

     * @var ?MethodTaxedPriceCollection
     */
    private $taxedPricePortions;

    /**
     * <p>Unique identifier for the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
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
     * <p>Array of <a href="ctp:api:type:DiscountedLineItemPriceForQuantity">DiscountedLineItemPriceForQuantity</a> after the Discount recalculation.</p>
     *

     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        return $this->discountedPricePerQuantity;
    }

    /**
     * <p>Total Price of the <a href="ctp:api:type:LineItem">Line Item</a> after the Discount recalculation.</p>
     *

     * @return null|Money
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p><a href="ctp:api:type:TaxedItemPrice">TaxedItemPrice</a> of the <a href="ctp:api:type:LineItem">Line Item</a> after the Discount recalculation.</p>
     *

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**
     * <p>Taxed price of the Shipping Methods in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *

     * @return null|MethodTaxedPriceCollection
     */
    public function getTaxedPricePortions()
    {
        return $this->taxedPricePortions;
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
     * @param ?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity
     * @return $this
     */
    public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }

    /**
     * @param ?Money $totalPrice
     * @return $this
     */
    public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?MethodTaxedPriceCollection $taxedPricePortions
     * @return $this
     */
    public function withTaxedPricePortions(?MethodTaxedPriceCollection $taxedPricePortions)
    {
        $this->taxedPricePortions = $taxedPricePortions;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    public function build(): OrderLineItemDiscountSetMessagePayload
    {
        return new OrderLineItemDiscountSetMessagePayloadModel(
            $this->lineItemId,
            $this->lineItemKey,
            $this->discountedPricePerQuantity,
            $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->taxedPricePortions
        );
    }

    public static function of(): OrderLineItemDiscountSetMessagePayloadBuilder
    {
        return new self();
    }
}
