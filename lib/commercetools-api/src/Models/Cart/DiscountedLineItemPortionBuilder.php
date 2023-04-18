<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedLineItemPortion>
 */
final class DiscountedLineItemPortionBuilder implements Builder
{
    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $discount;

    /**

     * @var null|TypedMoney|TypedMoneyBuilder
     */
    private $discountedAmount;

    /**
     * <p>A <a href="ctp:api:type:CartDiscountReference">CartDiscountReference</a> or <a href="ctp:api:type:DirectDiscountReference">DirectDiscountReference</a> for the applicable discount on the Line Item.</p>
     *

     * @return null|Reference
     */
    public function getDiscount()
    {
        return $this->discount instanceof ReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * <p>Money value of the discount applicable.</p>
     *

     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof TypedMoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
    }

    /**
     * @param ?Reference $discount
     * @return $this
     */
    public function withDiscount(?Reference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @param ?TypedMoney $discountedAmount
     * @return $this
     */
    public function withDiscountedAmount(?TypedMoney $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    /**
     * @deprecated use withDiscount() instead
     * @return $this
     */
    public function withDiscountBuilder(?ReferenceBuilder $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @deprecated use withDiscountedAmount() instead
     * @return $this
     */
    public function withDiscountedAmountBuilder(?TypedMoneyBuilder $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    public function build(): DiscountedLineItemPortion
    {
        return new DiscountedLineItemPortionModel(
            $this->discount instanceof ReferenceBuilder ? $this->discount->build() : $this->discount,
            $this->discountedAmount instanceof TypedMoneyBuilder ? $this->discountedAmount->build() : $this->discountedAmount
        );
    }

    public static function of(): DiscountedLineItemPortionBuilder
    {
        return new self();
    }
}
