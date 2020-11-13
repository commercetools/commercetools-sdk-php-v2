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
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_PRODUCT = 'product';

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
     * operation state is set to <code>ValidationFailed</code>.</p>
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
     * <p>If there were updates, only the updates will be published to <code>staged</code> and <code>current</code> projection.</p>
     *
     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>The product in which this product variant is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct();

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
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;
}
