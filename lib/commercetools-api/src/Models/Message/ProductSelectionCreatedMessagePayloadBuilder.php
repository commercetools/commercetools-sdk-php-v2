<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\ProductSelection;
use Commercetools\Api\Models\ProductSelection\ProductSelectionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionCreatedMessagePayload>
 */
final class ProductSelectionCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|ProductSelection|ProductSelectionBuilder
     */
    private $productSelection;

    /**
     * <p><a href="ctp:api:type:ProductSelection">Product Selection</a> that was created.</p>
     *

     * @return null|ProductSelection
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * @param ?ProductSelection $productSelection
     * @return $this
     */
    public function withProductSelection(?ProductSelection $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ProductSelectionBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): ProductSelectionCreatedMessagePayload
    {
        return new ProductSelectionCreatedMessagePayloadModel(
            $this->productSelection instanceof ProductSelectionBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): ProductSelectionCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
