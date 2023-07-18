<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantImportDraft extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_IMAGES = 'images';

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>. Required if you do not set a value for <code>sku</code>.
     * If set, you must specify a <code>productId</code> in the <a href="ctp:api:type:LineItemImportDraft">LineItemImportDraft</a> also.</p>
     *

     * @return null|int
     */
    public function getId();

    /**
     * <p>The <code>sku</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>. Required if you do not set a value for <code>id</code>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The <a href="ctp:api:type:Price">Prices</a> of the Product Variant if you want to override the <code>prices</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>prices</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are used in the resulting Order.
     * If set, each Price must have its unique price scope (same <code>value.currencyCode</code>, <code>country</code>, <code>customerGroup</code>, <code>channel</code>, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>The <a href="ctp:api:type:Attribute">Attributes</a> of the Product Variant if you want to override the <code>attributes</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>attributes</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are copied to the resulting Order.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>The <a href="ctp:api:type:Image">Images</a> of the Product Variant if you want to override the <code>images</code> property in the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a>.
     * If not set, the <code>images</code> from the referenced <a href="ctp:api:type:ProductVariant">ProductVariant</a> are copied to the resulting Order.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?PriceDraftCollection $prices
     */
    public function setPrices(?PriceDraftCollection $prices): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;
}
