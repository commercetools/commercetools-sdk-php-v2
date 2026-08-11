<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_ASSETS = 'assets';

    /**
     * <p>User-defined unique identifier for the Variant.
     * This field is optional, but we strongly recommend setting it.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>User-defined unique SKU of the Variant.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>ResourceIdentifier of the <a href="ctp:api:type:Product">Product</a> the Variant belongs to.</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct();

    /**
     * <p>Indicates whether the Variant is published.
     * If <code>true</code>, the Variant will be immediately available in the current published state.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Images for the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Variant Attributes according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Media assets for the Variant.</p>
     *

     * @return null|AssetDraftCollection
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
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void;

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
     * @param ?AssetDraftCollection $assets
     */
    public function setAssets(?AssetDraftCollection $assets): void;
}
