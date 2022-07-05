<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Models\Common\ProductReference;

interface SimilarProduct extends JsonObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_META = 'meta';

    /**
     * <p>Reference to Product</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>ID of the ProductVariant that was compared.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Supplementary information about the data used for similarity estimation. This information helps you understand the estimated confidence score, but it should not be used to identify a product.</p>
     *

     * @return null|SimilarProductMeta
     */
    public function getMeta();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?SimilarProductMeta $meta
     */
    public function setMeta(?SimilarProductMeta $meta): void;
}
