<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantTailoringDraft extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to be tailored.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to be tailored.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Images of the tailored Product Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Media assets of the tailored Product Variant.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>Attributes of the tailored Product Variant according to the respective <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.
     * If provided, these Attributes are selectively merged into the <code>attributes</code> of the corresponding <a href="ctp:api:type:ProductVariant">ProductVariant</a>:</p>
     * <ul>
     * <li>If the ProductVariant contains an Attribute with the same <code>name</code>, its <code>value</code> is overwritten,</li>
     * <li>otherwise the Attribute and its value are added to the ProductVariant.</li>
     * </ul>
     *

     * @return null|ProductTailoringAttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?ProductTailoringAttributeCollection $attributes
     */
    public function setAttributes(?ProductTailoringAttributeCollection $attributes): void;
}
