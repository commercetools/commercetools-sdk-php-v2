<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface FilteredFacetResult extends FacetResult
{
    public const FIELD_COUNT = 'count';
    public const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> matching the value specified in <a href="/../api/projects/products-search#filtered-facet-expression">filtered facet expression</a>.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Number of <a href="ctp:api:type:Product">Products</a> matching the value specified in <a href="/../api/projects/products-search#filtered-facet-expression">filtered facet expression</a>.</p>
     * <p>Present only if the <code>counting products</code> <a href="/projects/products-search#counting-products">extension</a> is enabled.</p>
     *

     * @return null|int
     */
    public function getProductCount();

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $productCount
     */
    public function setProductCount(?int $productCount): void;
}
