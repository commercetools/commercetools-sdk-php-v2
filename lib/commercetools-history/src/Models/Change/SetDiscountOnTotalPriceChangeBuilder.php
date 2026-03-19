<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\DiscountOnTotalPrice;
use Commercetools\History\Models\Common\DiscountOnTotalPriceBuilder;

/**
 * @implements Builder<SetDiscountOnTotalPriceChange>
 */
final class SetDiscountOnTotalPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|DiscountOnTotalPrice|DiscountOnTotalPriceBuilder
     */
    private $previousValue;

    /**

     * @var null|DiscountOnTotalPrice|DiscountOnTotalPriceBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DiscountOnTotalPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountOnTotalPriceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountOnTotalPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountOnTotalPriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?DiscountOnTotalPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountOnTotalPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DiscountOnTotalPrice $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountOnTotalPrice $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountOnTotalPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountOnTotalPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetDiscountOnTotalPriceChange
    {
        return new SetDiscountOnTotalPriceChangeModel(
            $this->change,
            $this->previousValue instanceof DiscountOnTotalPriceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof DiscountOnTotalPriceBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetDiscountOnTotalPriceChangeBuilder
    {
        return new self();
    }
}
