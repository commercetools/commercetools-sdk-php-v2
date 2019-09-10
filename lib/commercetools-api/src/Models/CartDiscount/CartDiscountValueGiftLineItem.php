<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Product\ProductReference;

interface CartDiscountValueGiftLineItem extends CartDiscountValue
{
    const FIELD_PRODUCT = 'product';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * @return null|int
     */
    public function getVariantId();

    /**
     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return null|ChannelReference
     */
    public function getDistributionChannel();

    public function setProduct(?ProductReference $product): void;

    public function setVariantId(?int $variantId): void;

    public function setSupplyChannel(?ChannelReference $supplyChannel): void;

    public function setDistributionChannel(?ChannelReference $distributionChannel): void;
}
