<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountReference;
use Commercetools\Api\Models\ProductDiscount\ProductDiscountReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedPriceDraft>
 */
final class DiscountedPriceDraftBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**
     * @var null|ProductDiscountReference|ProductDiscountReferenceBuilder
     */
    private $discount;

    /**
     * <p>Sets the money value for the discounted price.</p>
     *
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * <p>Relates the referenced <a href="ctp:api:type:ProductDiscount">ProductDiscount</a> to the discounted price.</p>
     *
     * @return null|ProductDiscountReference
     */
    public function getDiscount()
    {
        return $this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount;
    }

    /**
     * @param ?Money $value
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?ProductDiscountReference $discount
     * @return $this
     */
    public function withDiscount(?ProductDiscountReference $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withDiscount() instead
     * @return $this
     */
    public function withDiscountBuilder(?ProductDiscountReferenceBuilder $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function build(): DiscountedPriceDraft
    {
        return new DiscountedPriceDraftModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->discount instanceof ProductDiscountReferenceBuilder ? $this->discount->build() : $this->discount
        );
    }

    public static function of(): DiscountedPriceDraftBuilder
    {
        return new self();
    }
}
