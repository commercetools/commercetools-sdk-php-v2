<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\DiscountedPrice;

interface ProductPriceExternalDiscountSetMessagePayload extends MessagePayload
{
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_VARIANT_KEY = 'variantKey';
    const FIELD_SKU = 'sku';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_DISCOUNTED = 'discounted';
    const FIELD_STAGED = 'staged';

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|string
     */
    public function getVariantKey();

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * @return null|string
     */
    public function getPriceId();

    /**
     * @return null|DiscountedPrice
     */
    public function getDiscounted();

    /**
     * @return null|bool
     */
    public function getStaged();

    public function setVariantId(?int $variantId): void;

    public function setVariantKey(?string $variantKey): void;

    public function setSku(?string $sku): void;

    public function setPriceId(?string $priceId): void;

    public function setDiscounted(?DiscountedPrice $discounted): void;

    public function setStaged(?bool $staged): void;
}
