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
    public const FIELD_PRODUCT_PROJECTION = 'productProjection';
    public const FIELD_MATCHING_VARIANTS = 'matchingVariants';

    /**
     * <p>Unique identifier of the Product.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Contains Product Projection data for Products matching the <code>projection</code> field in the Search Products request.</p>
     *

     * @return null|ProductProjection
     */
    public function getProductProjection();

    /**
     * <p>Describes the variants that matched the search criteria.</p>
     *

     * @return null|ProductSearchMatchingVariants
     */
    public function getMatchingVariants();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void;

    /**
     * @param ?ProductSearchMatchingVariants $matchingVariants
     */
    public function setMatchingVariants(?ProductSearchMatchingVariants $matchingVariants): void;
}
