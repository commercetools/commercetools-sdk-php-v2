<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<FacetTerm>
 */
final class FacetTermBuilder implements Builder
{
    /**

     * @var null|mixed|mixed
     */
    private $term;

    /**

     * @var ?int
     */
    private $count;

    /**

     * @var ?int
     */
    private $productCount;

    /**
     * <p>Value for the field specified in the <a href="/../api/projects/products-search#term-facet-expression">term facet expression</a> for which at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> could be found.</p>
     *

     * @return null|mixed
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> for which the <code>term</code> applies.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Number of <a href="ctp:api:type:Product">Products</a> for which the <code>term</code> applies.
     * Only available if the <code>counting products</code> <a href="/../api/projects/products-search#counting-products">extension</a> is enabled.</p>
     *

     * @return null|int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @param mixed $term
     * @return $this
     */
    public function withTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?int $productCount
     * @return $this
     */
    public function withProductCount(?int $productCount)
    {
        $this->productCount = $productCount;

        return $this;
    }


    public function build(): FacetTerm
    {
        return new FacetTermModel(
            $this->term,
            $this->count,
            $this->productCount
        );
    }

    public static function of(): FacetTermBuilder
    {
        return new self();
    }
}
