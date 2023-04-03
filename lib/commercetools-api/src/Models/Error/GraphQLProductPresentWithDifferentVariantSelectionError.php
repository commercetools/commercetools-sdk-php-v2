<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLProductPresentWithDifferentVariantSelectionError extends GraphQLErrorObject
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_EXISTING_VARIANT_SELECTION = 'existingVariantSelection';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Product">Product</a> for which the error was returned.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Existing Product Variant Selection or Exclusion for the <a href="/../api/projects/products">Product</a> in the <a href="/../api/projects/product-selections">Product Selection</a>.</p>
     *

     * @return null|ProductVariantSelection
     */
    public function getExistingVariantSelection();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?ProductVariantSelection $existingVariantSelection
     */
    public function setExistingVariantSelection(?ProductVariantSelection $existingVariantSelection): void;
}
