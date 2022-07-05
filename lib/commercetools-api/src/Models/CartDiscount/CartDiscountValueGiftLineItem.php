<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountValueGiftLineItem extends CartDiscountValue
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';

    /**
     * <p>Reference to a Product.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p><a href="ctp:api:type:ProductVariant">ProductVariant</a> of the Product.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Channel must have the <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a> <code>InventorySupply</code>.</p>
     *

     * @return null|ChannelReference
     */
    public function getSupplyChannel();

    /**
     * <p>Channel must have the <a href="ctp:api:type:ChannelRoleEnum">ChannelRoleEnum</a> <code>ProductDistribution</code>.</p>
     *

     * @return null|ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?ChannelReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelReference $supplyChannel): void;

    /**
     * @param ?ChannelReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelReference $distributionChannel): void;
}
