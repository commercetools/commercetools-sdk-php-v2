<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\PriceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceSetMessage extends Message
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_PRICES = 'prices';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was set.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The <a href="ctp:api:type:Price">Embedded Prices</a> that were set on the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|PriceCollection
     */
    public function getPrices();

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
     * @param ?PriceCollection $prices
     */
    public function setPrices(?PriceCollection $prices): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
