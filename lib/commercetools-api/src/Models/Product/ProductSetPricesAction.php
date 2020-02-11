<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\PriceDraftCollection;

interface ProductSetPricesAction extends ProductUpdateAction
{

    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setSku(?string $sku): void;

    public function setPrices(?PriceDraftCollection $prices): void;

    public function setStaged(?bool $staged): void;
}
