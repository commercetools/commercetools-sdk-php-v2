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

interface ProductSearchHit extends JsonObject
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
     * <p>Contains a list of identifiers (id and SKU) of the matching variants.</p>
     *

     * @return null|ProductSearchMatchingVariantCollection
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
     * @param ?ProductSearchMatchingVariantCollection $matchingVariants
     */
    public function setMatchingVariants(?ProductSearchMatchingVariantCollection $matchingVariants): void;
}
