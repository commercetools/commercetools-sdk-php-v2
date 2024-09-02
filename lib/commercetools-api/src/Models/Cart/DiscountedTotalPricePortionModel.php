<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\CartDiscount\CartDiscountReference;
use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceModel;
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
final class DiscountedTotalPricePortionModel extends JsonObjectModel implements DiscountedTotalPricePortion
{
    /**
     *
     * @var ?CartDiscountReference
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
        ?CartDiscountReference $discount = null,
        ?TypedMoney $discountedAmount = null
    ) {
        $this->discount = $discount;
        $this->discountedAmount = $discountedAmount;
    }

    /**
     * <p>Cart Discount related to the discounted price.</p>
     *
     *
     * @return null|CartDiscountReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discount = CartDiscountReferenceModel::of($data);
        }

        return $this->discount;
    }

    /**
     * <p>Money value of the discount.</p>
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
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->discountedAmount = $className::of($data);
        }

        return $this->discountedAmount;
    }


    /**
     * @param ?CartDiscountReference $discount
     */
    public function setDiscount(?CartDiscountReference $discount): void
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
