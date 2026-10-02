<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountTargetBuilder;
use Commercetools\Api\Models\CartDiscount\CartDiscountValue;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DirectDiscount>
 */
final class DirectDiscountBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|CartDiscountValue|CartDiscountValueBuilder
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
     * <p>Unique identifier of the Direct Discount.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Effect of the Discount on the Cart.</p>
     *

     * @return null|CartDiscountValue
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Segment of the Cart that is discounted.</p>
     * <p>Absent if the <code>value</code> is <code>giftLineItem</code>.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        return $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target;
    }

    /**
     * <ul>
     * <li>If <code>true</code>, Direct Discounts compete against Product Discounts to apply the <a href="/api/pricing-and-discounts-overview#best-deal">best deal</a>.</li>
     * <li>If <code>false</code>, Direct Discounts are ignored when calculating the best deal comparison, and are applied on top of the discount type that offers the best deal.</li>
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
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?CartDiscountValue $value
     * @return $this
     */
    public function withValue(?CartDiscountValue $value)
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
    public function withValueBuilder(?CartDiscountValueBuilder $value)
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

    public function build(): DirectDiscount
    {
        return new DirectDiscountModel(
            $this->id,
            $this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value,
            $this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target,
            $this->participateInBestDealSelection
        );
    }

    public static function of(): DirectDiscountBuilder
    {
        return new self();
    }
}
