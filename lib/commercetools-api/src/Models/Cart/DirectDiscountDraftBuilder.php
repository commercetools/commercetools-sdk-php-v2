<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountTargetBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueDraft;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DirectDiscountDraft>
 */
final class DirectDiscountDraftBuilder implements Builder
{
    /**

     * @var null|CartDiscountValueDraft|CartDiscountValueDraftBuilder
     */
    private $value;

    /**

     * @var null|CartDiscountTarget|CartDiscountTargetBuilder
     */
    private $target;

    /**

     * @var ?bool
     */
    private $participateInBestDealSelection;

    /**
     * <p>Defines the effect the Discount will have.</p>
     *

     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Defines what segment of the Cart will be discounted.</p>
     * <p>If <code>value</code> is set to <code>giftLineItem</code>, this must not be set.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
    }

    /**
     * <ul>
     * <li>If set to <code>true</code>, Direct Discounts compete against Product Discounts to apply the <a href="/api/pricing-and-discounts-overview#best-deal">best deal</a>.</li>
     * <li>If set to <code>false</code>, Direct Discounts are ignored when calculating the best deal comparison, and are applied on top of the discount type that offers the best deal.</li>
     * </ul>
     * <p>This applies only when the <a href="ctp:api:type:DiscountCombinationMode">DiscountCombinationMode</a> for the <a href="ctp:api:type:Project">Project</a> is <code>BestDeal</code>.</p>
     *

     * @return null|bool
     */
    public function getParticipateInBestDealSelection()
    {
        return $this->participateInBestDealSelection;
    }

    /**
     * @param ?CartDiscountValueDraft $value
     * @return $this
     */
    public function withValue(?CartDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?CartDiscountTarget $target
     * @return $this
     */
    public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param ?bool $participateInBestDealSelection
     * @return $this
     */
    public function withParticipateInBestDealSelection(?bool $participateInBestDealSelection)
    {
        $this->participateInBestDealSelection = $participateInBestDealSelection;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withTarget() instead
     * @return $this
     */
    public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;

        return $this;
    }

    public function build(): DirectDiscountDraft
    {
        return new DirectDiscountDraftModel(
            $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value,
            $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target,
            $this->participateInBestDealSelection
        );
    }

    public static function of(): DirectDiscountDraftBuilder
    {
        return new self();
    }
}
