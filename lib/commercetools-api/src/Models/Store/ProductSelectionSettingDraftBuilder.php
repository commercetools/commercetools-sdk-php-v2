<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifier;
use Commercetools\Api\Models\ProductSelection\ProductSelectionResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionSettingDraft>
 */
final class ProductSelectionSettingDraftBuilder implements Builder
{
    /**
     * @var null|ProductSelectionResourceIdentifier|ProductSelectionResourceIdentifierBuilder
     */
    private $productSelection;

    /**
     * @var ?bool
     */
    private $active;

    /**
     * <p>Resource Identifier of a ProductSelection.</p>
     *
     * @return null|ProductSelectionResourceIdentifier
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * <p>Set to <code>true</code> if all Products assigned to the Product Selection should become part of the Store's assortment.</p>
     *
     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ?ProductSelectionResourceIdentifier $productSelection
     * @return $this
     */
    public function withProductSelection(?ProductSelectionResourceIdentifier $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @param ?bool $active
     * @return $this
     */
    public function withActive(?bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ProductSelectionResourceIdentifierBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): ProductSelectionSettingDraft
    {
        return new ProductSelectionSettingDraftModel(
            $this->productSelection instanceof ProductSelectionResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection,
            $this->active
        );
    }

    public static function of(): ProductSelectionSettingDraftBuilder
    {
        return new self();
    }
}
