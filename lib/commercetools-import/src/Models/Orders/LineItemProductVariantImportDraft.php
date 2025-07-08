<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface LineItemProductVariantImportDraft extends JsonObject
{
    public const FIELD_PRODUCT_VARIANT = 'productVariant';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_IMAGES = 'images';

    /**
     * <p>Maps to <code>ProductVariant.product</code>. If the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ProductVariant is created.</p>
     *

     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant();

    /**
     * <p>Maps to <code>ProductVariantImportDraft.sku</code>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>ProductVariantImportDraft.prices</code></p>
     *

     * @return null|LineItemPriceCollection
     */
    public function getPrices();

    /**
     * <p>Maps to <code>ProductVariantImportDraft.attributes</code></p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Maps to <code>ProductVariantImportDraft.images</code>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * @param ?ProductVariantKeyReference $productVariant
     */
    public function setProductVariant(?ProductVariantKeyReference $productVariant): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?LineItemPriceCollection $prices
     */
    public function setPrices(?LineItemPriceCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;
}
