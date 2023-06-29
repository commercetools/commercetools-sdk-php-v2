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
use Commercetools\History\Models\Common\ProductVariantSelection;
use Commercetools\History\Models\Common\ProductVariantSelectionBuilder;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<AddProductChange>
 */
final class AddProductChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $nextValue;

    /**

     * @var null|ProductVariantSelection|ProductVariantSelectionBuilder
     */
    private $variantSelection;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
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
     * <p>The <a href="ctp:api:type:ProductVariant">Product Variants</a> included in the <a href="ctp:api:type:ProductSelection">Product Selection</a>.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getVariantSelection()
    {
        return $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection;
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
     * @param ?Reference $nextValue
     * @return $this
     */
    public function withNextValue(?Reference $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ProductVariantSelection $variantSelection
     * @return $this
     */
    public function withVariantSelection(?ProductVariantSelection $variantSelection)
    {
        $this->variantSelection = $variantSelection;

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

    /**
     * @deprecated use withVariantSelection() instead
     * @return $this
     */
    public function withVariantSelectionBuilder(?ProductVariantSelectionBuilder $variantSelection)
    {
        $this->variantSelection = $variantSelection;

        return $this;
    }

    public function build(): AddProductChange
    {
        return new AddProductChangeModel(
            $this->change,
            $this->nextValue instanceof ReferenceBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->variantSelection instanceof ProductVariantSelectionBuilder ? $this->variantSelection->build() : $this->variantSelection
        );
    }

    public static function of(): AddProductChangeBuilder
    {
        return new self();
    }
}
