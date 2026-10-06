<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountTargetModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueDraft;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DirectDiscountDraftModel extends JsonObjectModel implements DirectDiscountDraft
{
    /**
     *
     * @var ?CartDiscountValueDraft
     */
    protected $value;

    /**
     *
     * @var ?CartDiscountTarget
     */
    protected $target;

    /**
     *
     * @var ?bool
     */
    protected $participateInBestDealSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscountValueDraft $value = null,
        ?CartDiscountTarget $target = null,
        ?bool $participateInBestDealSelection = null
    ) {
        $this->value = $value;
        $this->target = $target;
        $this->participateInBestDealSelection = $participateInBestDealSelection;
    }

    /**
     * <p>Defines the effect the Discount will have.</p>
     *
     *
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueDraftModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Defines what segment of the Cart will be discounted.</p>
     * <p>If <code>value</code> is set to <code>giftLineItem</code>, this must not be set.</p>
     *
     *
     * @return null|CartDiscountTarget
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    /**
     * <ul>
     * <li>If set to <code>true</code>, Direct Discounts compete against Product Discounts to apply the <a href="/api/pricing-and-discounts-overview#best-deal">best deal</a>.</li>
     * <li>If set to <code>false</code>, Direct Discounts are ignored when calculating the best deal comparison, and are applied on top of the discount type that offers the best deal.</li>
     * </ul>
     * <p>This applies only when the <a href="ctp:api:type:DiscountCombinationMode">DiscountCombinationMode</a> for the <a href="ctp:api:type:Project">Project</a> is <code>BestDeal</code>.</p>
     *
     *
     * @return null|bool
     */
    public function getParticipateInBestDealSelection()
    {
        if (is_null($this->participateInBestDealSelection)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_PARTICIPATE_IN_BEST_DEAL_SELECTION);
            if (is_null($data)) {
                return null;
            }
            $this->participateInBestDealSelection = (bool) $data;
        }

        return $this->participateInBestDealSelection;
    }


    /**
     * @param ?CartDiscountValueDraft $value
     */
    public function setValue(?CartDiscountValueDraft $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }

    /**
     * @param ?bool $participateInBestDealSelection
     */
    public function setParticipateInBestDealSelection(?bool $participateInBestDealSelection): void
    {
        $this->participateInBestDealSelection = $participateInBestDealSelection;
    }
}
