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
use Commercetools\Base\JsonObject;

interface ProductVariantImportDraft extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';

    /**
     * <p>The sequential ID of the variant within the product.
     * The variant with provided ID should exist in some existing product, so you also need to specify the productId if this property is set,
     * or alternatively you can just specify SKU of the product variant.</p>.
     *
     * @return null|int
     */
    public function getId();

    /**
     * <p>The SKU of the existing variant.</p>.
     *
     * @return null|string
     */
    public function getSku();

    /**
     * <p>The prices of the variant.
     * The prices should not contain two prices for the same price scope (same currency, country and customer group).
     * If this property is defined, then it will override the <code>prices</code> property from the original product variant, otherwise <code>prices</code> property from the original product variant would be copied in the resulting order.</p>.
     *
     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>If this property is defined, then it will override the <code>attributes</code> property from the original
     * product variant, otherwise <code>attributes</code> property from the original product variant would be copied in the resulting order.</p>.
     *
     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>If this property is defined, then it will override the <code>images</code> property from the original
     * product variant, otherwise <code>images</code> property from the original product variant would be copied in the resulting order.</p>.
     *
     * @return null|ImageCollection
     */
    public function getImages();

    public function setId(?int $id): void;

    public function setSku(?string $sku): void;

    public function setPrices(?PriceDraftCollection $prices): void;

    public function setAttributes(?AttributeCollection $attributes): void;

    public function setImages(?ImageCollection $images): void;
}
