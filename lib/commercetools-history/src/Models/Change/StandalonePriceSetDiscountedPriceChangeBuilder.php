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
use Commercetools\History\Models\Common\DiscountedPrice;
use Commercetools\History\Models\Common\DiscountedPriceBuilder;

/**
 * @implements Builder<StandalonePriceSetDiscountedPriceChange>
 */
final class StandalonePriceSetDiscountedPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
     */
    private $previousValue;

    /**

     * @var null|DiscountedPrice|DiscountedPriceBuilder
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
     * <p>Indicates if the change was applied to the staged or current price.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof DiscountedPriceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof DiscountedPriceBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?DiscountedPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DiscountedPrice $nextValue
     * @return $this
     */
    public function withNextValue(?DiscountedPrice $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?DiscountedPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?DiscountedPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): StandalonePriceSetDiscountedPriceChange
    {
        return new StandalonePriceSetDiscountedPriceChangeModel(
            $this->change,
            $this->staged,
            $this->previousValue instanceof DiscountedPriceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof DiscountedPriceBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): StandalonePriceSetDiscountedPriceChangeBuilder
    {
        return new self();
    }
}
