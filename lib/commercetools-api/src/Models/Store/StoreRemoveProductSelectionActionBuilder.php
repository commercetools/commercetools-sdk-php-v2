<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Api\Models\Common\ResourceIdentifierBuilder;
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
     * @var null|ResourceIdentifier|ResourceIdentifierBuilder
     */
    private $productSelection;

    /**
     * <p>A Product Selection to be removed from the current Product Selections of this Store.</p>
     *
     * @return null|ResourceIdentifier
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * @param ?ResourceIdentifier $productSelection
     * @return $this
     */
    public function withProductSelection(?ResourceIdentifier $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ResourceIdentifierBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): StoreRemoveProductSelectionAction
    {
        return new StoreRemoveProductSelectionActionModel(
            $this->productSelection instanceof ResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): StoreRemoveProductSelectionActionBuilder
    {
        return new self();
    }
}
