<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\DiscountedLineItemPriceForQuantityCollection;
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
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
    }

    /**
     * @return null|DiscountedLineItemPriceForQuantityCollection
     */
    public function getDiscountedPricePerQuantity()
    {
        return $this->discountedPricePerQuantity;
    }

    /**
     * @return null|Money
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
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
    public function withDiscountedPricePerQuantity(?DiscountedLineItemPriceForQuantityCollection $discountedPricePerQuantity)
    {
        $this->discountedPricePerQuantity = $discountedPricePerQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
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
            $this->discountedPricePerQuantity,
            $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice
        );
    }

    public static function of(): OrderLineItemDiscountSetMessagePayloadBuilder
    {
        return new self();
    }
}
