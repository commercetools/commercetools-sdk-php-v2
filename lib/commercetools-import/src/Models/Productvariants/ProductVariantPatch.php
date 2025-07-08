<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;

interface ProductVariantPatch extends JsonObject
{
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>Reference to the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to update.</p>
     *

     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <ul>
     * <li>The referenced Attribute must be defined in an existing <a href="ctp:api:type:ProductType">ProductType</a>, or the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be <code>validationFailed</code>.</li>
     * <li>Setting the value of a non-required Attribute to <code>null</code> will remove the Attribute.</li>
     * <li>Attempting to set a <code>null</code> value to a required Attribute will make the import operation fail with an <a href="ctp:import:type:InvalidOperation">InvalidOperation</a> error.</li>
     * <li>Importing <a href="ctp:import:type:LocalizableTextAttribute">LocalizableTextAttributes</a> or <a href="ctp:import:type:LocalizableTextSetAttribute">LocalizableTextSetAttributes</a> follows an override pattern, meaning that omitted localized fields will be deleted, new fields will be created, and existing fields will be updated. You can delete localized fields by setting their value to <code>null</code>.</li>
     * </ul>
     *

     * @return null|Attributes
     */
    public function getAttributes();

    /**
     * <p>If <code>false</code>, the attribute changes are applied to both <a href="/projects/productProjections#current--staged">current and staged projected representations</a> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Reference to the <a href="ctp:api:type:Product">Product</a> that contains the ProductVariant.</p>
     * <p>We recommend to set this value to minimize concurrency errors.
     * If set, this field is required for every ProductVariantPatch in the <a href="ctp:import:type:ProductVariantPatchRequest">ProductVariantPatchRequest</a>.</p>
     * <p>If the referenced Product does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

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

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;
}
