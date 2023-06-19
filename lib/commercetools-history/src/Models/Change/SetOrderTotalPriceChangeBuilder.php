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
use Commercetools\History\Models\Common\Money;
use Commercetools\History\Models\Common\MoneyBuilder;

/**
 * @implements Builder<SetOrderTotalPriceChange>
 */
final class SetOrderTotalPriceChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $previousValue;

    /**

     * @var null|Money|MoneyBuilder
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

     * @return null|Money
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Money
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?Money $previousValue
     * @return $this
     */
    public function withPreviousValue(?Money $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Money $nextValue
     * @return $this
     */
    public function withNextValue(?Money $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?MoneyBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?MoneyBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetOrderTotalPriceChange
    {
        return new SetOrderTotalPriceChangeModel(
            $this->change,
            $this->previousValue instanceof MoneyBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof MoneyBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetOrderTotalPriceChangeBuilder
    {
        return new self();
    }
}
