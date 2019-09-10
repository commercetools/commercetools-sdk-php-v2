<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DiscountedPriceModel extends JsonObjectModel implements DiscountedPrice
{
    /**
     * @var ?ProductDiscountReference
     */
    protected $discount;

    /**
     * @var ?Money
     */
    protected $value;

    public function __construct(
        ProductDiscountReference $discount = null,
        Money $value = null
    ) {
        $this->discount = $discount;
        $this->value = $value;
    }

    /**
     * @return null|ProductDiscountReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedPrice::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discount = ProductDiscountReferenceModel::of($data);
        }

        return $this->discount;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedPrice::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    public function setDiscount(?ProductDiscountReference $discount): void
    {
        $this->discount = $discount;
    }

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }
}
