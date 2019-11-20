<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\DiscountedLineItemPortionCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<DiscountedLineItemPriceDraft>
 */
final class DiscountedLineItemPriceDraftBuilder implements Builder
{
    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    private $includedDiscounts;

    /**
     * @var Money|?MoneyBuilder
     */
    private $value;

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts()
    {
        return $this->includedDiscounts;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): DiscountedLineItemPriceDraft
    {
        return new DiscountedLineItemPriceDraftModel(
            $this->includedDiscounts,
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): DiscountedLineItemPriceDraftBuilder
    {
        return new self();
    }
}
