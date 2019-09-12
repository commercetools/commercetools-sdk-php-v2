<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportResource;

interface ProductVariantImport extends ImportResource
{
    const FIELD_SKU = 'sku';
    const FIELD_IS_MASTER_VARIANT = 'isMasterVariant';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';
    const FIELD_ASSETS = 'assets';
    const FIELD_PRODUCT = 'product';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|bool
     */
    public function getIsMasterVariant();

    /**
     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>The product in which this product variant is contained.</p>.
     *
     * @return null|ImportReference
     */
    public function getProduct();

    public function setSku(?string $sku): void;

    public function setIsMasterVariant(?bool $isMasterVariant): void;

    public function setAttributes(?AttributeCollection $attributes): void;

    public function setImages(?ImageCollection $images): void;

    public function setAssets(?AssetCollection $assets): void;

    public function setProduct(?ImportReference $product): void;
}
