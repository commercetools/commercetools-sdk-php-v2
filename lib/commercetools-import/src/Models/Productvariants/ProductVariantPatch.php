<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\ProductKeyReference;
use Models\Common\ProductVariantKeyReference;

interface ProductVariantPatch extends JsonObject
{

    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>The product variant to which this patch is applied.</p>
     * <p>The product variant referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>The product in which the patched product variant resides. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <p>Each attribute referenced must be defined
     * in an already existing product type in the commercetools project, or the import
     * operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|Attributes
     */
    public function getAttributes();

    public function setProductVariant(?ProductVariantKeyReference $productVariant): void;

    public function setProduct(?ProductKeyReference $product): void;

    public function setAttributes(?Attributes $attributes): void;
}
