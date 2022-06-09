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
 * @implements Builder<StoreRemoveProductSelectionAction>
 */
final class StoreRemoveProductSelectionActionBuilder implements Builder
{
    /**
     * @var null|ProductSelectionResourceIdentifier|ProductSelectionResourceIdentifierBuilder
     */
    private $productSelection;

    /**
     * <p>Value to remove. The removed Product Selection is made offline.</p>
     *
     * @return null|ProductSelectionResourceIdentifier
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection;
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
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ProductSelectionResourceIdentifierBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): StoreRemoveProductSelectionAction
    {
        return new StoreRemoveProductSelectionActionModel(
            $this->productSelection instanceof ProductSelectionResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): StoreRemoveProductSelectionActionBuilder
    {
        return new self();
    }
}
