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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountedLineItemPriceDraft>
 */
final class DiscountedLineItemPriceDraftBuilder implements Builder
{
    /**
     * @var null|Money|MoneyBuilder
     */
    private $value;

    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    private $includedDiscounts;

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts()
    {
        return $this->includedDiscounts;
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
     * @param ?DiscountedLineItemPortionCollection $includedDiscounts
     * @return $this
     */
    public function withIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts)
    {
        $this->includedDiscounts = $includedDiscounts;

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

    public function build(): DiscountedLineItemPriceDraft
    {
        return new DiscountedLineItemPriceDraftModel(
            $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value,
            $this->includedDiscounts
        );
    }

    public static function of(): DiscountedLineItemPriceDraftBuilder
    {
        return new self();
    }
}
