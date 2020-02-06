<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ProductKeyReference;

interface ProductVariantImport extends ImportResource
{
    const FIELD_SKU = 'sku';
    const FIELD_IS_MASTER_VARIANT = 'isMasterVariant';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';
    const FIELD_ASSETS = 'assets';
    const FIELD_PRODUCT = 'product';

    /**
     * <p>Maps to <code>ProductVariant.sku</code>.</p>
     *
     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>ProductVariant.isMasterVariant</code>.</p>
     *
     * @return null|bool
     */
    public function getIsMasterVariant();

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <p>Each attribute referenced must be defined
     * in an already existing product type in the commercetools project, or the import
     * operation state is set to <code>Unresolved</code>.</p>
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
     * <p>The product in which this product variant is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct();

    public function setSku(?string $sku): void;

    public function setIsMasterVariant(?bool $isMasterVariant): void;

    public function setAttributes(?AttributeCollection $attributes): void;

    public function setImages(?ImageCollection $images): void;

    public function setAssets(?AssetCollection $assets): void;

    public function setProduct(?ProductKeyReference $product): void;
}
