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
 * @implements Builder<SetVariantAvailabilityChange>
 */
final class SetVariantAvailabilityChangeBuilder implements Builder
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
     * @var null|ProductVariantAvailability|ProductVariantAvailabilityBuilder
     */
    private $previousValue;

    /**
     * @var null|ProductVariantAvailability|ProductVariantAvailabilityBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setVariantAvailability</code></p>
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
     * @return null|ProductVariantAvailability
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ProductVariantAvailabilityBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @return null|ProductVariantAvailability
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ProductVariantAvailabilityBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ProductVariantAvailability $previousValue
     * @return $this
     */
    public function withPreviousValue(?ProductVariantAvailability $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ProductVariantAvailability $nextValue
     * @return $this
     */
    public function withNextValue(?ProductVariantAvailability $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ProductVariantAvailabilityBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ProductVariantAvailabilityBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetVariantAvailabilityChange
    {
        return new SetVariantAvailabilityChangeModel(
            $this->change,
            $this->catalogData,
            $this->variant,
            $this->previousValue instanceof ProductVariantAvailabilityBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ProductVariantAvailabilityBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetVariantAvailabilityChangeBuilder
    {
        return new self();
    }
}
