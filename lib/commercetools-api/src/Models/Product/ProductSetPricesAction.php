<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetPricesAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The <code>id</code> of the ProductVariant to update.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The <code>sku</code> of the ProductVariant to update.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>The Embedded Prices to set.</p>
     * <p>If any two Embedded Prices in this array have the same key, a <a href="ctp:api:type:DuplicatePriceKeyError">DuplicatePriceKey</a> error is returned.</p>
     * <p>If any two Embedded Prices in this array have the same price scope, a <a href="ctp:api:type:DuplicatePriceScopeError">DuplicatePriceScope</a> error is returned.</p>
     * <p>If any two Embedded Prices in this array have overlapping validity periods within the same price scope, an <a href="ctp:api:type:OverlappingPriceValidityError">OverlappingPriceValidity</a> error is returned. An Embedded Price without validity period does not conflict with an Embedded Price defined for a time period.</p>
     *

     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>Whether only the staged ProductVariant is updated. If <code>false</code>, both the current and staged ProductVariant are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?PriceDraftCollection $prices
     */
    public function setPrices(?PriceDraftCollection $prices): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
