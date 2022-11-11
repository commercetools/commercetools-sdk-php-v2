<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\PriceDraftCollection;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantValues extends JsonObject
{
    public const FIELD_SKU = 'sku';
    public const FIELD_PRICES = 'prices';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>SKU of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Embedded Prices of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|PriceDraftCollection
     */
    public function getPrices();

    /**
     * <p>Attributes of the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

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
}
