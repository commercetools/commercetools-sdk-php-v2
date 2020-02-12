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

final class DiscountedLineItemPortionModel extends JsonObjectModel implements DiscountedLineItemPortion
{
    /**
     * @var ?CartDiscountReference
     */
    protected $discount;

    /**
     * @var ?TypedMoney
     */
    protected $discountedAmount;


    public function __construct(
        CartDiscountReference $discount = null,
        TypedMoney $discountedAmount = null
    ) {
        $this->discount = $discount;
        $this->discountedAmount = $discountedAmount;
    }

    /**
     * @return null|CartDiscountReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discount = CartDiscountReferenceModel::of($data);
        }

        return $this->discount;
    }

    /**
     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedLineItemPortion::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discountedAmount = TypedMoneyModel::of($data);
        }

        return $this->discountedAmount;
    }

    public function setDiscount(?CartDiscountReference $discount): void
    {
        $this->discount = $discount;
    }

    public function setDiscountedAmount(?TypedMoney $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }
}
