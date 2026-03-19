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
use Commercetools\History\Models\Common\ProductVariantExclusion;
use Commercetools\History\Models\Common\ProductVariantExclusionBuilder;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<ExcludeProductChange>
 */
final class ExcludeProductChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ProductVariantExclusion|ProductVariantExclusionBuilder
     */
    private $variantExclusion;

    /**

     * @var null|Reference|ReferenceBuilder
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
     * <p>Only Product Variants with the explicitly listed SKUs are part of a Product Selection with <code>IndividualExclusion</code> <a href="ctp:api:type:ProductSelectionMode">ProductSelectionMode</a>.</p>
     *

     * @return null|ProductVariantExclusion
     */
    public function getVariantExclusion()
    {
        return $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Reference
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ReferenceBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ProductVariantExclusion $variantExclusion
     * @return $this
     */
    public function withVariantExclusion(?ProductVariantExclusion $variantExclusion)
    {
        $this->variantExclusion = $variantExclusion;

        return $this;
    }

    /**
     * @param ?Reference $nextValue
     * @return $this
     */
    public function withNextValue(?Reference $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withVariantExclusion() instead
     * @return $this
     */
    public function withVariantExclusionBuilder(?ProductVariantExclusionBuilder $variantExclusion)
    {
        $this->variantExclusion = $variantExclusion;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ReferenceBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ExcludeProductChange
    {
        return new ExcludeProductChangeModel(
            $this->change,
            $this->variantExclusion instanceof ProductVariantExclusionBuilder ? $this->variantExclusion->build() : $this->variantExclusion,
            $this->nextValue instanceof ReferenceBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): ExcludeProductChangeBuilder
    {
        return new self();
    }
}
