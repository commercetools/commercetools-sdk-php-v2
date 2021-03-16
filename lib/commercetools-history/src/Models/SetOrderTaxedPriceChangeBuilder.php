<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetOrderTaxedPriceChange>
 */
final class SetOrderTaxedPriceChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $nextValue;

    /**
     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>setOrderTaxedPrice</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TaxedItemPriceBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @return null|TaxedItemPrice
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TaxedItemPriceBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?TaxedItemPrice $nextValue
     * @return $this
     */
    public function withNextValue(?TaxedItemPrice $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $previousValue
     * @return $this
     */
    public function withPreviousValue(?TaxedItemPrice $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?TaxedItemPriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?TaxedItemPriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): SetOrderTaxedPriceChange
    {
        return new SetOrderTaxedPriceChangeModel(
            $this->change,
            $this->nextValue instanceof TaxedItemPriceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof TaxedItemPriceBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): SetOrderTaxedPriceChangeBuilder
    {
        return new self();
    }
}
