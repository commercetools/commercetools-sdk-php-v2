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
 * @implements Builder<ChangePriceChange>
 */
final class ChangePriceChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $catalogData;

    /**
     * @var ?string
     */
    private $priceId;

    /**
     * @var null|Price|PriceBuilder
     */
    private $previousValue;

    /**
     * @var null|Price|PriceBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for changing prices</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return null|Price
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof PriceBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @return null|Price
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof PriceBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?string $priceId
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @param ?Price $previousValue
     * @return $this
     */
    public function withPreviousValue(?Price $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Price $nextValue
     * @return $this
     */
    public function withNextValue(?Price $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?PriceBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?PriceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangePriceChange
    {
        return new ChangePriceChangeModel(
            $this->change,
            $this->catalogData,
            $this->priceId,
            $this->previousValue instanceof PriceBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof PriceBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ChangePriceChangeBuilder
    {
        return new self();
    }
}
