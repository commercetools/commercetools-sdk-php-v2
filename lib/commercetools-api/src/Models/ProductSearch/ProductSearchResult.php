<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchResult extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_MATCHING_VARIANTS = 'matchingVariants';
    public const FIELD_PRODUCT_PROJECTION = 'productProjection';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a> that matches the search query.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Information about which Product Variants match the search query.
     * Only present if <code>markMatchingVariants</code> is set to <code>true</code> in the <a href="ctp:api:type:ProductSearchRequest">ProductSearchRequest</a>.</p>
     *

     * @return null|ProductSearchMatchingVariants
     */
    public function getMatchingVariants();

    /**
     * <p>Projected data of the Product with <code>id</code>.
     * Only present if data integration <a href="/../api/projects/product-search#with-product-projection-parameters">with Product Projection parameters</a> is requested.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?ProductSearchMatchingVariants $matchingVariants
     */
    public function setMatchingVariants(?ProductSearchMatchingVariants $matchingVariants): void;

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void;
}
