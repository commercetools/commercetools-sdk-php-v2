<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountedLineItemPortionDraftModel extends JsonObjectModel implements DiscountedLineItemPortionDraft
{
    /**
     *
     * @var ?Reference
     */
    protected $discount;

    /**
     *
     * @var ?TypedMoneyDraft
     */
    protected $discountedAmount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $discount = null,
        ?TypedMoneyDraft $discountedAmount = null
    ) {
        $this->discount = $discount;
        $this->discountedAmount = $discountedAmount;
    }

    /**
     * <p>A <a href="ctp:api:type:CartDiscountReference">CartDiscountReference</a> or <a href="ctp:api:type:DirectDiscountReference">DirectDiscountReference</a> for the discount applicable on the Line Item.</p>
     *
     *
     * @return null|Reference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->discount = $className::of($data);
        }

        return $this->discount;
    }

    /**
     * <p>Money value for the discount applicable.</p>
     *
     *
     * @return null|TypedMoneyDraft
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->discountedAmount = $className::of($data);
        }

        return $this->discountedAmount;
    }


    /**
     * @param ?Reference $discount
     */
    public function setDiscount(?Reference $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @param ?TypedMoneyDraft $discountedAmount
     */
    public function setDiscountedAmount(?TypedMoneyDraft $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }
}
