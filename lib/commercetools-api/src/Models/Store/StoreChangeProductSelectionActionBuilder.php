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
 * @implements Builder<StoreChangeProductSelectionAction>
 */
final class StoreChangeProductSelectionActionBuilder implements Builder
{
    /**
     * @var null|ResourceIdentifier|ResourceIdentifierBuilder
     */
    private $productSelection;

    /**
     * @var ?bool
     */
    private $active;

    /**
     * <p>A current Product Selection of this Store that is to be activated or deactivated.</p>
     *
     * @return null|ResourceIdentifier
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * <p>If <code>true</code> all Products assigned to the Product Selection become part of the Store's assortment.</p>
     *
     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
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
    public function withProductSelectionBuilder(?ResourceIdentifierBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): StoreChangeProductSelectionAction
    {
        return new StoreChangeProductSelectionActionModel(
            $this->productSelection instanceof ResourceIdentifierBuilder ? $this->productSelection->build() : $this->productSelection,
            $this->active
        );
    }

    public static function of(): StoreChangeProductSelectionActionBuilder
    {
        return new self();
    }
}
