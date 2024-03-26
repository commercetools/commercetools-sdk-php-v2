<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchResult>
 */
final class ProductSearchResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|ProductProjection|ProductProjectionBuilder
     */
    private $productProjection;

    /**

     * @var null|ProductSearchMatchingVariants|ProductSearchMatchingVariantsBuilder
     */
    private $matchingVariants;

    /**
     * <p>Unique identifier of the Product.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains Product Projection data for Products matching the <code>projection</code> field in the Search Products request.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        return $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection;
    }

    /**
     * <p>Describes the variants that matched the search criteria.</p>
     *

     * @return null|ProductSearchMatchingVariants
     */
    public function getMatchingVariants()
    {
        return $this->matchingVariants instanceof ProductSearchMatchingVariantsBuilder ? $this->matchingVariants->build() : $this->matchingVariants;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?ProductProjection $productProjection
     * @return $this
     */
    public function withProductProjection(?ProductProjection $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

    /**
     * @param ?ProductSearchMatchingVariants $matchingVariants
     * @return $this
     */
    public function withMatchingVariants(?ProductSearchMatchingVariants $matchingVariants)
    {
        $this->matchingVariants = $matchingVariants;

        return $this;
    }

    /**
     * @deprecated use withProductProjection() instead
     * @return $this
     */
    public function withProductProjectionBuilder(?ProductProjectionBuilder $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

    /**
     * @deprecated use withMatchingVariants() instead
     * @return $this
     */
    public function withMatchingVariantsBuilder(?ProductSearchMatchingVariantsBuilder $matchingVariants)
    {
        $this->matchingVariants = $matchingVariants;

        return $this;
    }

    public function build(): ProductSearchResult
    {
        return new ProductSearchResultModel(
            $this->id,
            $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection,
            $this->matchingVariants instanceof ProductSearchMatchingVariantsBuilder ? $this->matchingVariants->build() : $this->matchingVariants
        );
    }

    public static function of(): ProductSearchResultBuilder
    {
        return new self();
    }
}
