<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceAddedMessage extends Message
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_PRICE = 'price';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was added.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The <a href="ctp:api:type:Price">Embedded Price</a> that was added to the <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|Price
     */
    public function getPrice();

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
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
