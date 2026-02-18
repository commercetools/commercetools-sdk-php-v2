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

/**
 * @implements Builder<DiscountedLineItemPriceForQuantity>
 */
final class DiscountedLineItemPriceForQuantityBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $quantity;

    /**

     * @var null|DiscountedLineItemPrice|DiscountedLineItemPriceBuilder
     */
    private $discountedPrice;

    /**
     * <p>Number of Line Items or Custom Line Items in the Cart.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <p>Discounted price of the Line Item or Custom Line Item.</p>
     * <p>When multiple <a href="ctp:api:type:CartDiscount">Cart Discounts</a> apply to the same Line Item, the discounts are applied sequentially in the order determined by their <code>sortOrder</code> values (higher values are applied first). The <a href="ctp:api:type:RoundingMode">price rounding mode</a> specified by the Cart's <code>priceRoundingMode</code> field is applied after each individual discount is calculated, not after all discounts have been applied cumulatively. This means that rounding occurs at each step of the discount calculation process.</p>
     *

     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        return $this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice;
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
     * @param ?DiscountedLineItemPrice $discountedPrice
     * @return $this
     */
    public function withDiscountedPrice(?DiscountedLineItemPrice $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    /**
     * @deprecated use withDiscountedPrice() instead
     * @return $this
     */
    public function withDiscountedPriceBuilder(?DiscountedLineItemPriceBuilder $discountedPrice)
    {
        $this->discountedPrice = $discountedPrice;

        return $this;
    }

    public function build(): DiscountedLineItemPriceForQuantity
    {
        return new DiscountedLineItemPriceForQuantityModel(
            $this->quantity,
            $this->discountedPrice instanceof DiscountedLineItemPriceBuilder ? $this->discountedPrice->build() : $this->discountedPrice
        );
    }

    public static function of(): DiscountedLineItemPriceForQuantityBuilder
    {
        return new self();
    }
}
