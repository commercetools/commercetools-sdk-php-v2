<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceExternalDiscountSetMessagePayload extends MessagePayload
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_VARIANT_KEY = 'variantKey';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_DISCOUNTED = 'discounted';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">Product Variant</a> for which the Discount was set.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Key of the <a href="ctp:api:type:ProductVariant">Product Variant</a> for which the Discount was set.</p>
     *

     * @return null|string
     */
    public function getVariantKey();

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">Product Variant</a> for which Discount was set.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Price</a>.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>Discounted Price for the <a href="ctp:api:type:ProductVariant">Product Variant</a> for which Discount was set.</p>
     *

     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $variantKey
     */
    public function setVariantKey(?string $variantKey): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?DiscountedPrice $discounted
     */
    public function setDiscounted(?DiscountedPrice $discounted): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
