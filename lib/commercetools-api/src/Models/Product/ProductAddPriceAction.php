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

interface ProductAddPriceAction extends ProductUpdateAction
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICE = 'price';
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
     * <p>Embedded Price to add to the Product Variant.</p>
     * <p>If the key of the Price is used by another Embedded Price on the ProductVariant, a <a href="ctp:api:type:DuplicatePriceKeyError">DuplicatePriceKey</a> error is returned.</p>
     * <p>If this Embedded Price has the same price scope as an existing Embedded Price on the ProductVariant, a <a href="ctp:api:type:DuplicatePriceScopeError">DuplicatePriceScope</a> error is returned.</p>
     * <p>If this Embedded Price has overlapping validity periods within the same price scope, an <a href="ctp:api:type:OverlappingPriceValidityError">OverlappingPriceValidity</a> error is returned. An Embedded Price without validity period does not conflict with an Embedded Price defined for a time period.</p>
     *

     * @return null|PriceDraft
     */
    public function getPrice();

    /**
     * <p>Whether only staged <code>prices</code> are updated. If <code>false</code>, both current and staged <code>prices</code> are updated.</p>
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
     * @param ?PriceDraft $price
     */
    public function setPrice(?PriceDraft $price): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
