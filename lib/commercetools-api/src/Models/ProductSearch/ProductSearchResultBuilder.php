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

     * @var null|ProductSearchMatchingVariants|ProductSearchMatchingVariantsBuilder
     */
    private $matchingVariants;

    /**

     * @var null|ProductProjection|ProductProjectionBuilder
     */
    private $productProjection;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a> that matches the search query.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Information about which Product Variants match the search query.
     * Only present if <code>markMatchingVariants</code> is set to <code>true</code> in the <a href="ctp:api:type:ProductSearchRequest">ProductSearchRequest</a>.</p>
     *

     * @return null|ProductSearchMatchingVariants
     */
    public function getMatchingVariants()
    {
        return $this->matchingVariants instanceof ProductSearchMatchingVariantsBuilder ? $this->matchingVariants->build() : $this->matchingVariants;
    }

    /**
     * <p>Projected data of the Product with <code>id</code>.
     * Only present if data integration <a href="/../api/projects/product-search#with-product-projection-parameters">with Product Projection parameters</a> is requested.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        return $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection;
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
     * @param ?ProductSearchMatchingVariants $matchingVariants
     * @return $this
     */
    public function withMatchingVariants(?ProductSearchMatchingVariants $matchingVariants)
    {
        $this->matchingVariants = $matchingVariants;

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
     * @deprecated use withMatchingVariants() instead
     * @return $this
     */
    public function withMatchingVariantsBuilder(?ProductSearchMatchingVariantsBuilder $matchingVariants)
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

    public function build(): ProductSearchResult
    {
        return new ProductSearchResultModel(
            $this->id,
            $this->matchingVariants instanceof ProductSearchMatchingVariantsBuilder ? $this->matchingVariants->build() : $this->matchingVariants,
            $this->productProjection instanceof ProductProjectionBuilder ? $this->productProjection->build() : $this->productProjection
        );
    }

    public static function of(): ProductSearchResultBuilder
    {
        return new self();
    }
}
