<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedLineItemPortionDraft>
 */
final class DiscountedLineItemPortionDraftBuilder implements Builder
{
    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $discount;

    /**

     * @var null|TypedMoneyDraft|TypedMoneyDraftBuilder
     */
    private $discountedAmount;

    /**
     * <p>A <a href="ctp:api:type:CartDiscountReference">CartDiscountReference</a> or <a href="ctp:api:type:DirectDiscountReference">DirectDiscountReference</a> for the discount applicable on the Line Item.</p>
     *

     * @return null|Reference
     */
    public function getDiscount()
    {
        return $this->discount instanceof ReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * <p>Money value for the discount applicable.</p>
     *

     * @return null|TypedMoneyDraft
     */
    public function getDiscountedAmount()
    {
        return $this->discountedAmount instanceof TypedMoneyDraftBuilder ? $this->discountedAmount->build() : $this->discountedAmount;
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
     * @param ?TypedMoneyDraft $discountedAmount
     * @return $this
     */
    public function withDiscountedAmount(?TypedMoneyDraft $discountedAmount)
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
    public function withDiscountedAmountBuilder(?TypedMoneyDraftBuilder $discountedAmount)
    {
        $this->discountedAmount = $discountedAmount;

        return $this;
    }

    public function build(): DiscountedLineItemPortionDraft
    {
        return new DiscountedLineItemPortionDraftModel(
            $this->discount instanceof ReferenceBuilder ? $this->discount->build() : $this->discount,
            $this->discountedAmount instanceof TypedMoneyDraftBuilder ? $this->discountedAmount->build() : $this->discountedAmount
        );
    }

    public static function of(): DiscountedLineItemPortionDraftBuilder
    {
        return new self();
    }
}
