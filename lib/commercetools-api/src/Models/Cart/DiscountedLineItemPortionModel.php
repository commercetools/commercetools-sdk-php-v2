<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountedLineItemPortionModel extends JsonObjectModel implements DiscountedLineItemPortion
{
    /**
     *
     * @var ?Reference
     */
    protected $discount;

    /**
     *
     * @var ?TypedMoney
     */
    protected $discountedAmount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $discount = null,
        ?TypedMoney $discountedAmount = null
    ) {
        $this->discount = $discount;
        $this->discountedAmount = $discountedAmount;
    }

    /**
     * <p>A <a href="ctp:api:type:CartDiscountReference">CartDiscountReference</a> or <a href="ctp:api:type:DirectDiscountReference">DirectDiscountReference</a> of the applicable discount on the Line Item.</p>
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

            $this->discount = ReferenceModel::of($data);
        }

        return $this->discount;
    }

    /**
     * <p>Money value of the applicable discount.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discountedAmount = TypedMoneyModel::of($data);
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
     * @param ?TypedMoney $discountedAmount
     */
    public function setDiscountedAmount(?TypedMoney $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }
}
