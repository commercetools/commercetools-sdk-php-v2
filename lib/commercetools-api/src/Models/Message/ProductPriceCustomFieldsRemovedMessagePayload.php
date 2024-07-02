<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceCustomFieldsRemovedMessagePayload extends MessagePayload
{
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Price</a> from which the Custom Type was removed.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> to which the Price belongs.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
