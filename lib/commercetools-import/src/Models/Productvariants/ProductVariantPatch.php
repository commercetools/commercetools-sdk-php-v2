<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;

interface ProductVariantPatch extends JsonObject
{
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <a href="/../api/projects/products#productvariant">ProductVariant</a> to which this patch is applied.
     * The Reference to the <a href="/../api/projects/products#productvariant">ProductVariant</a> with which the ProductVariantPatch is associated.
     * If referenced ProductVariant does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductVariant is created.</p>
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.
     * The referenced attribute must be defined in an already existing <a href="/../api/projects/productTypes#producttype">ProductType</a> in the Project, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>unresolved</code>.</p>
     *
     * @return null|Attributes
     */
    public function getAttributes();

    /**
     * <p>If <code>false</code>, the attribute changes are applied to both <a href="/../api/projects/productProjections#current--staged">current and staged projected representations</a> of the <a href="/../api/projects/products#product">Product</a>.</p>
     *
     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ProductVariantKeyReference $productVariant
     */
    public function setProductVariant(?ProductVariantKeyReference $productVariant): void;

    /**
     * @param ?Attributes $attributes
     */
    public function setAttributes(?Attributes $attributes): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
