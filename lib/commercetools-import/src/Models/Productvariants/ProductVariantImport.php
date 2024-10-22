<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ProductKeyReference;

interface ProductVariantImport extends ImportResource
{
    public const FIELD_SKU = 'sku';
    public const FIELD_IS_MASTER_VARIANT = 'isMasterVariant';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_STAGED = 'staged';
    public const FIELD_PRODUCT = 'product';

    /**
     * <p>User-defined unique identifier. If a <a href="/../api/projects/products#productvariant">ProductVariant</a> with this <code>key</code> exists on the specified <code>product</code>, it will be updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>ProductVariant.sku</code>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <ul>
     * <li>When creating a new ProductVariant, set to <code>false</code>; otherwise, the import operation will fail with a <a href="/error#newmastervariantadditionnotallowederror">NewMasterVariantAdditionNotAllowed</a> error.</li>
     * <li>Set to <code>true</code> if the ProductVariant exists and you want to set this ProductVariant as the Master Variant.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getIsMasterVariant();

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.
     * The referenced attribute must be defined in an already existing ProductType in the project, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>unresolved</code>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Maps to <code>ProductVariant.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Maps to <code>ProductVariant.assets</code>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <ul>
     * <li>Set to <code>false</code> to update both the <a href="/../api/projects/productProjections#current--staged">current and staged projections</a> of the <a href="/../api/projects/products#product">Product</a> with the new Product Variant data.</li>
     * <li>Leave empty or set to <code>true</code> to only update the staged projection.</li>
     * </ul>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The <a href="/../api/projects/products#productvariant">Product</a> to which this Product Variant belongs. Maps to <code>ProductVariant.product</code>.
     * The Reference to the <a href="/../api/projects/products#product">Product</a> with which the ProductVariant is associated.
     * If referenced Product does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?bool $isMasterVariant
     */
    public function setIsMasterVariant(?bool $isMasterVariant): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;
}
