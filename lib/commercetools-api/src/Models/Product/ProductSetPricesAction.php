<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

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
     * <p>The Embedded Prices to set.
     * Each Price must have its unique Price scope (with same currency, country, Customer Group, Channel, <code>validFrom</code> and <code>validUntil</code>).</p>
     *

     * @return null|EmbeddedPriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>If <code>true</code>, only the staged ProductVariant is updated. If <code>false</code>, both the current and staged ProductVariant are updated.</p>
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
     * @param ?EmbeddedPriceDraftCollection $prices
     */
    public function setPrices(?EmbeddedPriceDraftCollection $prices): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
