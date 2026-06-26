<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Variants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface VariantImport extends ImportResource
{
    public const FIELD_SKU = 'sku';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_ASSETS = 'assets';

    /**
     * <p>User-defined unique identifier. If a Variant with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>VariantData.sku</code>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>Variant.product</code>.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * <p>Indicates whether the Variant is published. If <code>true</code>, the Variant is immediately available in the current published state.
     * Maps to <code>VariantDraft.publish</code>.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Maps to <code>VariantData.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Maps to <code>VariantData.attributes</code>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Maps to <code>VariantData.assets</code>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;

    /**
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;
}
