<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\ProductSelection\IndividualProductSelectionType;
use Commercetools\Api\Models\ProductSelection\IndividualProductSelectionTypeBuilder;
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

     * @var null|IndividualProductSelectionType|IndividualProductSelectionTypeBuilder
     */
    private $productSelection;

    /**
     * <p>The <code>type</code> and <code>name</code> of the individual Product Selection.</p>
     *

     * @return null|IndividualProductSelectionType
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof IndividualProductSelectionTypeBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * @param ?IndividualProductSelectionType $productSelection
     * @return $this
     */
    public function withProductSelection(?IndividualProductSelectionType $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?IndividualProductSelectionTypeBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): ProductSelectionCreatedMessagePayload
    {
        return new ProductSelectionCreatedMessagePayloadModel(
            $this->productSelection instanceof IndividualProductSelectionTypeBuilder ? $this->productSelection->build() : $this->productSelection
        );
    }

    public static function of(): ProductSelectionCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
