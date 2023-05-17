<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductRemovePriceAction extends ProductUpdateAction
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_SKU = 'sku';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_PRICE = 'price';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the Embedded Price to remove.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>The <code>sku</code> of the ProductVariant the provided Price should be removed from.
     * Either 'variantId' or 'sku' is required&quot; when <code>priceId</code> is not provided.
     * This field is now deprecated, use 'priceId' instead.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The <code>id</code> of the ProductVariant the provided Price should be removed from.
     * Either 'variantId' or 'sku' is required&quot; when <code>priceId</code> is not provided.
     * This field is now deprecated, use 'priceId' instead.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The Price identical to the one to be removed from the ProductVariant.
     * This field is now deprecated, use 'priceId' instead.</p>
     *

     * @return null|PriceDraft
     */
    public function getPrice();

    /**
     * <p>If <code>true</code>, only the staged Embedded Price is removed. If <code>false</code>, both the current and staged Embedded Price are removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?PriceDraft $price
     */
    public function setPrice(?PriceDraft $price): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
