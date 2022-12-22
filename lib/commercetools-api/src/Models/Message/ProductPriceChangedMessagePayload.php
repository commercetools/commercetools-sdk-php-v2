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

interface ProductPriceChangedMessagePayload extends MessagePayload
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_OLD_PRICE = 'oldPrice';
    public const FIELD_NEW_PRICE = 'newPrice';
    public const FIELD_STAGED = 'staged';
    public const FIELD_OLD_STAGED_PRICE = 'oldStagedPrice';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> for which the Price was changed.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>The current <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *

     * @return null|Price
     */
    public function getOldPrice();

    /**
     * <p>The <a href="ctp:api:type:Price">Embedded Price</a> after the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *

     * @return null|Price
     */
    public function getNewPrice();

    /**
     * <p>Whether the update was only applied to the staged <a href="ctp:api:type:ProductProjection">Product Projection</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The staged <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductChangePriceAction">Change Embedded Price</a> update action.</p>
     *

     * @return null|Price
     */
    public function getOldStagedPrice();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?Price $oldPrice
     */
    public function setOldPrice(?Price $oldPrice): void;

    /**
     * @param ?Price $newPrice
     */
    public function setNewPrice(?Price $newPrice): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?Price $oldStagedPrice
     */
    public function setOldStagedPrice(?Price $oldStagedPrice): void;
}
