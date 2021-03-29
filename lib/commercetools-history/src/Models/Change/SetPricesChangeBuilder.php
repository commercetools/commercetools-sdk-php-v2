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
use Commercetools\History\Models\Common\PriceCollection;

/**
 * @implements Builder<SetPricesChange>
 */
final class SetPricesChangeBuilder implements Builder
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
    private $variant;

    /**
     * @var ?PriceCollection
     */
    private $previousValue;

    /**
     * @var ?PriceCollection
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setPrices</code></p>
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
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * @return null|PriceCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|PriceCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?PriceCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?PriceCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?PriceCollection $nextValue
     * @return $this
     */
    public function withNextValue(?PriceCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetPricesChange
    {
        return new SetPricesChangeModel(
            $this->change,
            $this->catalogData,
            $this->variant,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetPricesChangeBuilder
    {
        return new self();
    }
}
