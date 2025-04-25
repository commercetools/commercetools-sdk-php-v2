<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface FacetTerm extends JsonObject
{
    public const FIELD_TERM = 'term';
    public const FIELD_COUNT = 'count';
    public const FIELD_PRODUCT_COUNT = 'productCount';

    /**
     * <p>Value for the field specified in the <a href="/../api/projects/product-projection-search#term-facet-expression">term facet expression</a> for which at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> could be found.</p>
     *

     * @return null|mixed
     */
    public function getTerm();

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> for which the <code>term</code> applies.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Number of <a href="ctp:api:type:Product">Products</a> for which the <code>term</code> applies.
     * Only available if the <code>counting products</code> <a href="/../api/projects/product-projection-search#counting-products">extension</a> is enabled.</p>
     *

     * @return null|int
     */
    public function getProductCount();

    /**
     * @param mixed $term
     */
    public function setTerm($term): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $productCount
     */
    public function setProductCount(?int $productCount): void;
}
