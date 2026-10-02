<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountTarget;
use Commercetools\Api\Models\CartDiscount\CartDiscountTargetModel;
use Commercetools\Api\Models\CartDiscount\CartDiscountValue;
use Commercetools\Api\Models\CartDiscount\CartDiscountValueModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DirectDiscountModel extends JsonObjectModel implements DirectDiscount
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?CartDiscountValue
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
        ?string $id = null,
        ?CartDiscountValue $value = null,
        ?CartDiscountTarget $target = null,
        ?bool $participateInBestDealSelection = null
    ) {
        $this->id = $id;
        $this->value = $value;
        $this->target = $target;
        $this->participateInBestDealSelection = $participateInBestDealSelection;
    }

    /**
     * <p>Unique identifier of the Direct Discount.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Effect of the Discount on the Cart.</p>
     *
     *
     * @return null|CartDiscountValue
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = CartDiscountValueModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Segment of the Cart that is discounted.</p>
     * <p>Absent if the <code>value</code> is <code>giftLineItem</code>.</p>
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
     * <li>If <code>true</code>, Direct Discounts compete against Product Discounts to apply the <a href="/api/pricing-and-discounts-overview#best-deal">best deal</a>.</li>
     * <li>If <code>false</code>, Direct Discounts are ignored when calculating the best deal comparison, and are applied on top of the discount type that offers the best deal.</li>
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void
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
