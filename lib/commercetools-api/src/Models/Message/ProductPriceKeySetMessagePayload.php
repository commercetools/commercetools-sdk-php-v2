<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPriceKeySetMessagePayload extends MessagePayload
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_PRICE_ID = 'priceId';
    public const FIELD_OLD_KEY = 'oldKey';
    public const FIELD_KEY = 'key';
    public const FIELD_STAGED = 'staged';

    /**

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Price">Embedded Price</a>.</p>
     *

     * @return null|string
     */
    public function getPriceId();

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:Price">Embedded Price</a> before the <a href="ctp:api:type:ProductSetPriceKeyAction">Set Price Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldKey();

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:Price">Embedded Price</a> after the <a href="ctp:api:type:ProductSetPriceKeyAction">Set Price Key</a> update action.</p>
     *

     * @return null|string
     */
    public function getKey();

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
     * @param ?string $priceId
     */
    public function setPriceId(?string $priceId): void;

    /**
     * @param ?string $oldKey
     */
    public function setOldKey(?string $oldKey): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
