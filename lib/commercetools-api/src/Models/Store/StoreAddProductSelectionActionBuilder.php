<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreAddProductSelectionAction>
 */
final class StoreAddProductSelectionActionBuilder implements Builder
{
    /**
     * @var null|ProductSelectionSettingDraft|ProductSelectionSettingDraftBuilder
     */
    private $productSelection;

    /**
     * <p>A Product Selection to be added to the current Product Selections of this Store.</p>
     *
     * @return null|ProductSelectionSettingDraft
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionSettingDraftBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * @param ?ProductSelectionSettingDraft $productSelection
     * @return $this
     */
    public function withProductSelection(?ProductSelectionSettingDraft $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ProductSelectionSettingDraftBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): StoreAddProductSelectionAction
    {
        return new StoreAddProductSelectionActionModel(
            $this->productSelection instanceof ProductSelectionSettingDraftBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): StoreAddProductSelectionActionBuilder
    {
        return new self();
    }
}
