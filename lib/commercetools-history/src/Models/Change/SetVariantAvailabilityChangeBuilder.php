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
use Commercetools\History\Models\Common\ProductVariantAvailability;
use Commercetools\History\Models\Common\ProductVariantAvailabilityBuilder;

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

     * @var null|ProductVariantAvailability|ProductVariantAvailabilityBuilder
     */
    private $previousValue;

    /**

     * @var null|ProductVariantAvailability|ProductVariantAvailabilityBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @var ?string
     */
    private $variant;

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

     * @return null|ProductVariantAvailability
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ProductVariantAvailabilityBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductVariantAvailability
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ProductVariantAvailabilityBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * <p><code>sku</code> or <code>key</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ProductVariantAvailabilityBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
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
            $this->previousValue instanceof ProductVariantAvailabilityBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ProductVariantAvailabilityBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData,
            $this->variant
        );
    }

    public static function of(): SetVariantAvailabilityChangeBuilder
    {
        return new self();
    }
}
