<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantCreatedMessage extends Message
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_KEY = 'key';
    public const FIELD_SKU = 'sku';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_IMAGES = 'images';
    public const FIELD_PUBLISH = 'publish';

    /**
     * <p>Reference to the Product containing the Variant.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Unique identifier of the Variant.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Unique identifier of the Variant within its parent Product.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>User-defined unique identifier of the Variant.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>SKU of the Variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Attributes of the Variant.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Assets of the Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>Images of the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Whether the Variant was published.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;
}
