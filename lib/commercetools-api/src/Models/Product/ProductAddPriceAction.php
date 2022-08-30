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
     *

     * @return null|PriceDraft
     */
    public function getPrice();

    /**
     * <p>If <code>true</code>, only the staged <code>prices</code> is updated. If <code>false</code>, both the current and staged <code>prices</code> are updated.</p>
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
