<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CartDiscountKeyReference;
use Commercetools\Import\Models\Common\CartDiscountKeyReferenceModel;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyModel;
use stdClass;

/**
 * @internal
 */
final class DiscountedLineItemPortionModel extends JsonObjectModel implements DiscountedLineItemPortion
{
    /**

     * @var ?CartDiscountKeyReference
     */
    protected $discount;

    /**

     * @var ?Money
     */
    protected $discountedAmount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscountKeyReference $discount = null,
        ?Money $discountedAmount = null
    ) {
        $this->discount = $discount;
        $this->discountedAmount = $discountedAmount;
    }

    /**
     * <p>References a cart discount by key.</p>
     *

     * @return null|CartDiscountKeyReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discount = CartDiscountKeyReferenceModel::of($data);
        }

        return $this->discount;
    }

    /**

     * @return null|Money
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discountedAmount = MoneyModel::of($data);
        }

        return $this->discountedAmount;
    }


    /**
     * @param ?CartDiscountKeyReference $discount
     */
    public function setDiscount(?CartDiscountKeyReference $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @param ?Money $discountedAmount
     */
    public function setDiscountedAmount(?Money $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }
}
