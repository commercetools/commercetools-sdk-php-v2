<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\ProductSelectionType;
use Commercetools\Api\Models\ProductSelection\ProductSelectionTypeBuilder;
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
     * @var null|ProductSelectionType|ProductSelectionTypeBuilder
     */
    private $productSelection;

    /**
     * @return null|ProductSelectionType
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ProductSelectionTypeBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * @param ?ProductSelectionType $productSelection
     * @return $this
     */
    public function withProductSelection(?ProductSelectionType $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ProductSelectionTypeBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): ProductSelectionCreatedMessagePayload
    {
        return new ProductSelectionCreatedMessagePayloadModel(
            $this->productSelection instanceof ProductSelectionTypeBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): ProductSelectionCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
