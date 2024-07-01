<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringImagesSetMessage extends Message
{
    public const FIELD_STORE = 'store';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_OLD_IMAGES = 'oldImages';
    public const FIELD_IMAGES = 'images';

    /**
     * <p>The Store to which the Product Tailoring belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p><code>key</code> of the tailored Product.</p>
     *

     * @return null|string
     */
    public function getProductKey();

    /**
     * <p>Reference to the Product the Product Tailoring belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p><code>id</code> of the tailored Product Variant.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p><a href="ctp:api:type:Image">Images</a> on the tailored <a href="ctp:api:type:ProductVariantTailoring">Product Variant</a> before the <a href="ctp:api:type:ProductTailoringSetExternalImagesAction">Set Images</a> update action.</p>
     *

     * @return null|ImageCollection
     */
    public function getOldImages();

    /**
     * <p><a href="ctp:api:type:Image">Images</a> on the tailored <a href="ctp:api:type:ProductVariantTailoring">Product Variant</a> after the <a href="ctp:api:type:ProductTailoringSetExternalImagesAction">Set Images</a> update action.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?ImageCollection $oldImages
     */
    public function setOldImages(?ImageCollection $oldImages): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;
}
